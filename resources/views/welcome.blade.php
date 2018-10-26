<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body{
                background-image: url("{{asset('img/company.png')}}");
                background-size: cover;
            }
            .page{
                height: 100vh;
            }
            .login-side{
                background-color: rgba(255, 255, 255, 0.8);
            }
            .login-form{
                background-color: white;
                padding: 20px;
                border-radius: 5px;
            }
            h1, h2, h3{
                text-align: center;
            }
        </style>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row page">
                <div class="welcome col-sm align-self-center">
                    <h1>Selamat Datang</h1>
                    <h2>Sistem Manajemen Pegawai</h2>
                </div>
                <div class="login-side col-md-5 align-self-stretch d-flex flex-column justify-content-center">
                    <div class="login-form align-self-stretch">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
    </body>
</html>
