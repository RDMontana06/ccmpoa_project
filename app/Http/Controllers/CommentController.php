<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function create(Request $request)
    {
        $comment = new Comment;
        $comment->post_id = $request->post_id;
        $comment->comment = $request->comment;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        
       
        $post = Post::where('id',$request->post_id)->first();
        if($post->user_id != auth()->user()->id)
        {
            $action = (object)[
                'action' => 'Comment',
                'message' => 'commented on',
                'user_id' => $post->user_id,
                'action_by' => auth()->user()->id,
                'table_id' => $post->id,
                'table_name' => "comments",
              ];
    
            $new_notifi = new NotificationController;
            $notif =  $new_notifi->create($action);
        }
        return $comment;
    }

    public function remove(Request $request)
    {
        // return $request->all();
        $comment = Comment::findOrfail(intval($request->comment_id))->delete();

        return "success";
    }
}
