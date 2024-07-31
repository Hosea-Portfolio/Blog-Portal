<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryBlogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('website.categories', [
            'categories' => $categories,
            'slug' => "",
            'active' => 'Category'

        ]);
    }

    public function show(Request $request, $slug)
    {
        $sort_order = $request->input('sort_order', 'asc'); // Default ke 'asc' jika tidak ada query parameter

        $posts = Post::join('category', 'category.id', '=', 'posts.category_id')->where('category.slug', '=', $slug)->orderBy('posts.title', $sort_order)
            ->select('posts.title', 'posts.slug', 'posts.id', 'posts.image', 'category.name', 'posts.excerpt', 'posts.created_at', 'posts.like_counter')
            ->get();
        $category_name = Category::where('category.slug', '=', $slug)->first();
        return view('website.detail-category', [
            'posts' => $posts,
            'sort_order' => $sort_order,
            'category_name' => $category_name,
            'active' => 'Category',
            'slug' => $slug
        ]);
    }


    public function like($slug)
    {
        $data = Post::where('posts.slug', $slug)->first();
        $data->like_counter += 1;
        $category = $data->join('category', 'category.id', '=', 'posts.category_id')->where('category.id', $data->category_id)->first();
        $data->save();
        return  Redirect::to('/category/' . $category->slug . '#' . $data->id);
    }

    public function dislike($slug)
    {

        $data = Post::find($slug);
        if ($data->like_counter == 1) {
            $data->like_counter = 0;
        } else {
            $data->like_counter -= 1;
        }
        $category = $data->join('category', 'category.id', '=', 'posts.category_id')->where('category.id', $data->category_id)->first();
        $data->save();
        return  Redirect::to('/category/' . $category->slug . '#' . $data->id);
    }
}
