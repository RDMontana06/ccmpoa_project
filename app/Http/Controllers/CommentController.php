<?php

namespace App\Http\Controllers;
use App\Comment;
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

        return $comment;
    }

    public function remove(Request $request)
    {
        // return $request->all();
        $comment = Comment::findOrfail(intval($request->comment_id))->delete();

        return "success";
    }
}
