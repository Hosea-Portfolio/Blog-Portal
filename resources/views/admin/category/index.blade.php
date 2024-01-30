@extends('admin.layouts.main')

@extends('css.admin.dashboard')
@section('container')
    <h2>Categories</h2>
    <div>
        <a class="btn btn-primary" href="/admin/dashboard/categories/create"><span class="bi bi-plus"></span> Add Category</a>
    </div>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Publish</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @if ($category->active == 1)
                                <a href='{{ url('/admin/dashboard/categories/unpublish', $category->id) }}'
                                    class="btn btn-success btn-sm">Active</a>
                                </form>
                            @else
                                <a href='{{ url('/admin/dashboard/categories/publish', $category->id) }}'
                                    class="btn btn-secondary btn-sm">Inactive</a>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex flex-wrap">
                                <a href="/admin/dashboard/categories/{{ $category->id }}/edit"
                                    class="text-decoration-none text-primary"><span
                                        class="bi
                                    bi-pencil-fill"></span></a>
                                <form action="/admin/dashboard/categories/{{ $category->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button style="border: none;background-color:transparent"
                                        onclick="return confirm('Are you sure?')" class="text-danger"><span
                                            class="bi bi-trash-fill"></span></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends('js.admin.dashboard')
