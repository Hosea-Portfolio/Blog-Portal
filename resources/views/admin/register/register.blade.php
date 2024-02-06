<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.118.2">
    <title>{{ $active }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @include('css.admin.registration')


</head>

<body>
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">

                            <h6 class="msg-info">Create your admin account</h6>
                            <form action="/admin/register" method="post">
                                @csrf
                                <div class="form-group"> <label class="form-control-label text-muted">Name</label>
                                    <input type="text" id="name" name="name"
                                        class="form-control  @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Username</label>
                                    <input type="text" id="username" name="username"
                                        class="form-control  @error('username') is-invalid @enderror"
                                        value="{{ old('username') }}">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Password</label>
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Confirm
                                        Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('password_confirmation') }}">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row justify-content-center my-3 px-3"> <input type="submit"
                                        class="btn-block btn-color" value="Register">

                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="/admin/sign-in">Back to Login</a>
                </div>
                <div class="card card2">
                    <img src="/5342597.jpg" style="object-fit: cover; height:100%;width:100%;">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
