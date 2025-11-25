<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;

class PostController extends Controller
{
    protected $guarded = ['id'];
    protected $with = ['category', 'author']; 

    public function index()
    {
        $posts = Post::with(['category', 'author'])->get();

        return view('posts', [
            'posts' => $posts,
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
