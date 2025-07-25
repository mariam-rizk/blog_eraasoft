<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::where('is_publish', true)->with('user')->get();
        return view('home',[ 'posts'=> $posts]);
    }

    public function show(Post $post)
    {
        $comments = $post->comments()->with('user', 'replies.user')->latest()->get();
        return view('post', compact('post', 'comments'));
    }

}
