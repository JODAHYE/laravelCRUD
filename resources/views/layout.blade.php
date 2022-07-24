<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <!-- <link rel="stylesheet" href="/css/app.css"> -->
        <title>@yield('title')</title>
        <!-- @yield('style') -->
    </head>
    <body class='m-0'>
        <x-header />
        <div class='bg-[#fdf2f8] w-9/12 py-12 m-auto'>
            @yield('content')
        </div>        
</button>
    </body>
</html>
