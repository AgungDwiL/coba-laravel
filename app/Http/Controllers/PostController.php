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
            'posts' => Post::latest()->filter()->get(),
            'headingPage' => 'All Blogs'
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

    public function indexPostsByCategory(Category $category)
    {
        $category->load([
            'posts.author',
            'posts.category'
        ]);

        return view('posts', [
            'posts' => $category->posts,
            'headingPage' => 'All Blogs By Category: ' . $category->name
        ]);
    }
}
