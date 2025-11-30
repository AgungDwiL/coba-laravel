<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with(['posts', 'posts.author'])->get();

        return view('categories', [
            'categories' => $categories,
        ]);
    }
}
