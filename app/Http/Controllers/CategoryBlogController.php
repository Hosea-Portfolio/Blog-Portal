<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryBlogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('website.categories', [
            'categories' => $categories,
            'active' => 'Categories'

        ]);
    }

    public function show($slug)
    {
        $posts = Post::join('category', 'category.id', '=', 'posts.category_id')->where('category.slug', '=', $slug)->get();
        $category_name = Category::where('slug','=',$slug)->first();
        return view('website.detail-category', [
            'posts' => $posts,
            'category_name' => $category_name,
            'active' => 'Category Module'
        ]);
    }
}
