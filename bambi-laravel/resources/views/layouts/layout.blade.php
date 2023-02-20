<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css" type="text/css">
        <title>Laravel</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>