<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $category = null;
        $author = request('author');
        $search = request('search');

        if (request()->has('category')) {
            $category = Category::where('slug', request('category'))->firstOrFail();
        }

        // Tentukan headingPage
        if ($category && $author) {
            $headingPage = 'Posts in Category: ' . $category->name . '<br>Author: ' . $author;
        } elseif ($category) {
            $headingPage = 'Posts in Category: ' . $category->name;
        } elseif ($author) {
            $headingPage = 'Posts by Author: ' . $author;
        } else {
            $headingPage = 'All Posts';
        }

        return view('posts', [
            'search' => $search,
            'posts' => Post::latest()
                ->filter([
                    'search' => $search,
                    'category' => $category ? $category->slug : null,
                    'author' => $author
                ])
                ->paginate(7)->withQueryString(),
            'headingPage' => $headingPage
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
        'post' => $post
        ]);
    }

}
