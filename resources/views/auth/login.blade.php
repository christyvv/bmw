@extends('layouts.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="log/css/style.css">

    </head>

    <body>
        <!-- <section class="ftco-section"> -->
        <div class="container" style="margin-top : 60px">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-3">
                    <!-- <h2 class="heading-section"><strong>LOGIN</strong></h2> -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(log/images/bmw.bg.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4 text-center"><strong>LOGIN</strong></h3>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"required>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">{{ __('Login') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </section> -->

        <script src="log/js/jquery.min.js"></script>
        <script src="log/js/popper.js"></script>
        <script src="log/js/bootstrap.min.js"></script>
        <script src="log/js/main.js"></script>

    </body>

    </html>
@endsection
