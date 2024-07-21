@extends('admin.layouts.main')

@extends('css.admin.dashboard')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts</h1>
    </div>
    <div>
        <a class="btn btn-primary" href="/admin/dashboard/posts/create"><span class="bi bi-plus"></span> Add Blog Post</a>
    </div>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Blog Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Publish</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        @if ($post->image == null)
                            <td><img src="https://source.unsplash.com/200x200?{{ $post->category->name }}"
                                    class="img-thumbnail" alt="{{ $post->category->name }}"></td>
                        @else
                            <td><img src="{{ asset('storage/' . $post->image) }}" class="img-thumbnail"
                                    alt="{{ $post->category->name }}"></td>
                        @endif
                        <td>{{ $post->title }}</td>
                        <td>
                            @if ($post->active == 1)
                                <a href='{{ url('/admin/dashboard/posts/unpublish', $post->id) }}'
                                    class="btn btn-success btn-sm">Active</a>
                                </form>
                            @else
                                <a href='{{ url('/admin/dashboard/posts/publish', $post->id) }}'
                                    class="btn btn-secondary btn-sm">Inactive</a>
                            @endif
                        </td>
                        <td><a href="/admin/dashboard/posts/{{ $post->slug }}" class="text-decoration-none"><span
                                    class="bi bi-eye-fill" style="color:black;" class="text-decoration-none"></span></a>
                            <a href="/admin/dashboard/posts/{{ $post->slug }}/edit"
                                class="text-decoration-none text-primary"><span
                                    class="bi
                                bi-pencil-fill"></span></a>
                            <form action="/admin/dashboard/posts/{{ $post->slug }}" method="post">
                                @method('delete')
                                @csrf
                                <button style="border: none;background-color:transparent"
                                    onclick="return confirm('Are you sure?')" class="text-danger"><span
                                        class="bi bi-trash-fill"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends('js.admin.dashboard')
