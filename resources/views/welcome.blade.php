<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        {{--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">--}}
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .center {
                padding-top: 20px;
                display: flex;
                justify-content: center;
            }

            .flex-center {

                /*align-items: center;*/
                padding-top: 150px;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{--@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif--}}

            <div>
                <div class="title m-b-md center">
                    {{ env('APP_NAME', 'Ciessesoft') }}
                </div>
                <div class="center">
                    <h3>{{ env('APP_SUBTITLE', 'Ciessesoft app subtitle') }}</h3>
                </div>
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
