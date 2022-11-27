<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::with('user', 'likes.user', 'comments.user','attachment')->orderBy('created_at', 'desc')->get();
        return view(
            'main.main-feed',
            array(
                'header' => 'main',
                'posts' => $posts,
            )
        );
       
    }
}
