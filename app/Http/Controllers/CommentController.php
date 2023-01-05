<?php

namespace App\Http\Controllers;
use App\Comment;
use App\CommentHistory;
use App\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
                'action' => 'your post',
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
    public function editComment(Request $request)
    {
        // dd($request->all());
        $post = Comment::findOrfail($request->editcommentid);
        $posthistory = new CommentHistory;
        $posthistory->comment_id = $request->editcommentid;
        $posthistory->old_data = $post->comment;
        $posthistory->user_id = auth()->user()->id;
        $posthistory->save();


        $post->comment = $request->textarea;
        $post->save();

        Alert::success('Successfully Updated', 'People can now view your updated comment.')->persistent('Dismiss');
        return back();
    }
}
