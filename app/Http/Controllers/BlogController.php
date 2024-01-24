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

        ]);
    }
}
