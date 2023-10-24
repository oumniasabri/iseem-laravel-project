<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
    <div class="head">
            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <!-- <li><a href="{{ url('/user/HASSAN') }}">User</a></li> -->
                    <li><a href="{{ url('/test') }}">Test Page</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <h1 style="color: white; font-size:50px; font-weight:bolder">Welcome to this laravel app</h1>
        </div>
    </body>
</html>
