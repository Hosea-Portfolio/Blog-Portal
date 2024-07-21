@extends('admin.layouts.main')

@extends('css.admin.dashboard')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Roles</h1>
    </div>
    <div>
        <a class="btn btn-primary" href="/admin/dashboard/roles/create"><span class="bi bi-plus"></span> Add Role</a>
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
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @if ($role->active == 1)
                                <a href='{{ url('/admin/dashboard/roles/unpublish', $role->id) }}'
                                    class="btn btn-success btn-sm">Active</a>
                            @else
                                <a href='{{ url('/admin/dashboard/roles/publish', $role->id) }}'
                                    class="btn btn-secondary btn-sm">Inactive</a>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex flex-wrap">
                                <a href="/admin/dashboard/roles/{{ $role->id }}/edit"
                                    class="text-decoration-none text-primary"><span
                                        class="bi
                                    bi-pencil-fill"></span></a>
                                <form action="/admin/dashboard/roles/{{ $role->id }}" method="post">
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
