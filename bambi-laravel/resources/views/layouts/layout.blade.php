<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css" type="text/css">
        <title>Laravel</title>
    </head>
    <body>
        
        <a href="{{ route('welcome') }}">
            <button>Home</button>
        </a>
        <a href="{{ route('login') }}">
            <button>Login</button>
        </a>
        <a href="{{ route('login') }}">
            <button>Register</button>
        </a>
        <a href="">
            <button>Logout</button>
        </a>

        <p>Logged in Person Name</p>
        @yield('content')
    </body>
</html>