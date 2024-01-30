<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('website.home', [
            'posts' =>   Post::all(),
            'active' => 'Blog Home'

        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('website.detail-blog', [
            'post' =>   $post,
            'active' => $post->title
        ]);
    }
}
