<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
            }
            
            .container {
                width: 70%;
                margin: 0 auto;
                padding: 50px 0;
            }
            button{
                all: unset;
                cursor: pointer;
                background: #8555D3;
                color: #fff;
                border-radius: 4px;
                padding: 4px;
            }
            button:active{
                background: #9D6CEC;
            }    
            /* 헤더 */
            #nav-menu{
                width: 100vw;
                height: 8vh;
                display: flex;
                align-items: center;
                gap: 30px;
                margin: 0;
                background: #9D6CEC;
                list-style: none;
            }

            #nav-menu a{
                text-decoration: none;      
                color: #000;
                font-size: 20px;          
            }        
        </style>
        @yield('style')
    </head>
    <body>
        <x-header />
        <div class='container'>
            @yield('content')
        </div>        
    </body>
</html>
