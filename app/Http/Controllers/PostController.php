<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'search' => request('search'),
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
            'headingPage' => request('category') ? 'Posts By Category : ' . ucwords(request('category')) : 'All Posts'
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
        'post' => $post
        ]);
    }

    public function indexPostsByAuthor(User $user)
    {
        $user->load([
            'posts.category',
            'posts.author'
        ]);

        return view('posts', [
            'posts' => $user->posts,
            'headingPage' => 'All Blogs By Author: ' . $user->name 
        ]);
    }

}
