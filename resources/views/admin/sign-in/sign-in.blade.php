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
                            <h6 class="msg-info">Please login to your account</h6>
                            <form action="/admin/sign-in" method="post">
                                @csrf
                                <div class="form-group"> <label class="form-control-label text-muted">Username</label>
                                    <input type="text" id="username" name="username"
                                        class="form-control @error('username') is-invalid @enderror"
                                        value="{{ old('username') }}" autofocus>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Password</label>
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}" autofocus>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row justify-content-center my-3 px-3"> <button
                                        class="btn-block btn-color">Login
                                    </button> </div>
                            </form>

                            <div class="row justify-content-center my-2"> <a href="/admin/forgot-password"><small
                                        class="text-muted">Forgot
                                        Password?</small></a> </div>
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <p class="sm-text mx-auto mb-3">Don't have an account ? <a href="/admin/register"
                                class="text-primary">Create new</a>
                        </p>
                    </div>
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
