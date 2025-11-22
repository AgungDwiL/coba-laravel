<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', [
            'title' => 'Blog',
            'posts' => $posts
        ]);
    }

    public function show($slug)
    {
        $post = Post::find($slug);
        return view('post', [
        'title' => $post['title'],
        'post' => $post
        ]);
    }
}
