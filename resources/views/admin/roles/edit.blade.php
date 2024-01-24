@extends('admin.layouts.main')

@extends('css.admin.dashboard')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Role</h1>
    </div>
    <form method="post" action="/admin/dashboard/roles/{{ $role->id }}">
        @method('put')
        @csrf

        <div class="mb-3  w-100">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $role->name) }}" autofocus>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Update Role</button>
    </form>
@endsection
@extends('js.admin.dashboard')
