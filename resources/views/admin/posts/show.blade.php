@extends('admin.layouts.main')
@extends('css.admin.dashboard')
@section('container')
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <a href="/admin/dashboard/posts" class="btn btn-success">Back to My Posts</a>
            <a href="/admin/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/admin/dashboard/posts/{{ $post->slug }}" method="post">
                @method('delete')
                @csrf
                <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
            </form>


            @if ($post->image == null)
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                    alt="{{ $post->category->name }}">
            @else
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
            @endif

            <article class="my-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
@endsection
@extends('js.admin.dashboard')
