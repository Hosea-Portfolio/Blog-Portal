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
            'active' => 'Blog Home'

        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $popular = Post::where('category_id', '=', $post->category_id)->where('slug', '!=', $slug)->orderBy('like_counter', 'DESC')->take(3)->get();
        return view('website.detail-blog', [
            'post' =>   $post,
            'popular' => $popular,
            'active' => $post->title
        ]);
    }

    public function like($id)
    {

        // codingan like satu kali attempt per session
        // $data = Post::find($id);

        // $data->like_counter += 1;
        // $data->save();

        // Session::put('sesi_token', Session::getId());

        // SystemLog::create([
        //     'posts_id' => $id,
        //     'session_id' => Session::getId(),
        // ]);


        // $syslog = SystemLog::where('posts_id', '=', $id)->first();
        // return  Redirect::to('/' . "#" . $id)->with(['syslog' => $syslog]);
        // codingan like satu kali attempt per session

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
