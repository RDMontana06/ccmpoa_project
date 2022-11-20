<?php

namespace App\Http\Controllers;
use App\Post;
use App\Like;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(Request $request)
    {

        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->content = $request->data;
        $post->save();

        
        return $post;
    }

    public function likePost(Request $request)
    {
        
        if(str_contains($request->class,"is-active"))
        {
            $post = Like::where('post_id',$request->id)->where('user_id',auth()->user()->id)->where('deleted_at',null)->delete();
        }
        else
        {
            $like = new Like;
            $like->post_id = $request->id;
            $like->user_id = auth()->user()->id;
            $like->type = "Like";
            $like->save();
        }
        
        return "Success";
    }
}
