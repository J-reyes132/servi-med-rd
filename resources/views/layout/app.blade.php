<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('tittle')</title>
        @vite('/resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div>
            @yield('content')
        </div>
        @vite('resources/js/app.js')
</html>
