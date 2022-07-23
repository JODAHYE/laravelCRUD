<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            
            .container {
                position: relative;
                width: 70%;
                border: 1px solid #eee;
                margin: 0 auto;
            }

            #write-button {
                all: unset;
                cursor: pointer;
                background: blue;
                color: #fff;
                padding: 2px;
                border-radius: 4px;
                position: absolute;
                right: 20px;
                top: 20px;
            }

            /* 게시글 리스트 */
            .post-list{
                width: 100%;
            }
            .post-list-header{
                border: 1px solid #eee;
            }
            .post-item{
                cursor: pointer;
            }
            .post-item:hover{
                background: #eee;
            }
            .post-info{
                border: 1px solid #eee;
            }

            /* 글 작성 */
            
        </style>
    </head>
    <body>
        <div class='container'>
            <button type='button' id='write-button'>게시글 작성하기</button>
            @yield('content')
        </div>
    </body>
</html>
