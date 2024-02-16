@extends('admin.layouts.main')

@extends('css.admin.dashboard')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit User</h1>
    </div>
    <form method="post" action="/admin/dashboard/users/{{ $user->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="role" class="form-label">Role</label><span style="color:red">*</span>
            <select class="form-select" name='role_id'>
                @foreach ($roles as $role)
                    @if (old('role_id', $user->role_id) == $role->id)
                        <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                    @else
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-between" style="gap:10px">
            <div class="mb-3  w-100">
                <label for="name" class="form-label">Name</label><span style="color:red">*</span>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $user->name) }}" autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 w-100">
                <label for="username" class="form-label">Username</label><span style="color:red">*</span>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name='username' value="{{ old('username', $user->username) }}" autofocus>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-between" style="gap:10px">
            <div class="mb-3  w-100">
                <label for="email" class="form-label">Email</label><span style="color:red">*</span>
                <input type="mail" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email', $user->email) }}" autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3  w-100">
                <label for="password" class="form-label">Password</label><span style="color:red">*</span>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name='password' value="{{ old('password', $password) }}" autofocus>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
@endsection
@extends('js.admin.dashboard')
