<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SystemLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function index()
    {
        return view('website.home', [
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'active' => 'Blog Home',
            'slug' => "",

        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $popular = Post::where('category_id', '=', $post->category_id)->where('slug', '!=', $slug)->orderBy('like_counter', 'DESC')->take(3)->get();
        return view('website.detail-blog', [
            'post' =>   $post,
            'popular' => $popular,
            'active' => $post->title,
            'slug' => "",

        ]);
    }

    public function like($id)
    {
        $data = Post::find($id);

        $data->like_counter += 1;
        $data->save();
        return  Redirect::to('/' . "#" . $id);
    }

    public function dislike($id)
    {

        $data = Post::find($id);
        if ($data->like_counter == 1) {
            $data->like_counter = null;
        } else {
            $data->like_counter -= 1;
        }

        $data->save();
        return  Redirect::to('/' . "#" . $id);
    }
}
