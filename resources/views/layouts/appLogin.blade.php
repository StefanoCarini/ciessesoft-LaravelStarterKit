<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
        .normalFont {
            font-family: sans-serif;;
        }
        .center {
            padding-top: 20px;
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .title {
            padding-top: 100px;
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div>
    <div class="title m-b-md content">
        {{ config('app.name', 'Ciessesoft') }}
    </div><br>
    <div>
        @yield('content')
    </div>
</div>

<!-- jQuery -->
<script scr="{{ asset('js/jquery.min.js') }}></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
