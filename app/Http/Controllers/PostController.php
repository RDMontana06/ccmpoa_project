<?php

namespace App\Http\Controllers;
use App\Post;
use App\Like;
use App\PostAttachment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class PostController extends Controller
{
    //
    public function index(Request $request)
    {
        // dd($request->all());
        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->content = $request->textarea;
        $post->save();
        if ($request->hasFile('images')) {
                $file = $request->images;
                $path = $file->getClientOriginalName();
                $name = time() . '-' . $path;
                $attachment = new PostAttachment();
                $file->move(public_path() . '/post-images/', $name);
                $file_name = '/post-images/' . $name;
                $attachment->attachment = $file_name;
                $attachment->user_id = auth()->user()->id;
                $attachment->post_id = $post->id;
                $attachment->save();
        }
        // return $request->all();
        
        Alert::success('Successfully Publish', 'People can now view your post.')->persistent('Dismiss');
        return back();
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
    
    public function remove(Request $request)
    {
        $post = Post::findOrfail(intval($request->post_id))->delete();
        return "success";
    }
}
