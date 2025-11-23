<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
        'post' => $post
        ]);
    }

    public function indexPostByAuthor(User $user)
    {
        $posts = $user->posts;
        return view('posts', [
            'posts' => $posts
        ]);
    }
}
