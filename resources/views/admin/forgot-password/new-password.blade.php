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

                            <h6 class="msg-info">Create your new password</h6>
                            <form action="/admin/reset-password" method="post">
                                @csrf

                                <input type="hidden" name='token' value="{{ $token }}" />
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
                                <div class="form-group"> <label class="form-control-label text-muted">New
                                        Password</label>
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Confirm New
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
                                <div class="row justify-content-center my-3 px-3"> <button
                                        class="btn-block btn-color">Register
                                    </button> </div>
                            </form>
                        </div>
                    </div>
                    <a href="/admin/sign-in" class="text-primary">Back to Login</a>
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
