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
                width: 70%;
                margin: 0 auto;
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
            #post-form{
                display: flex;
                flex-direction: column;
                gap: 10px;
                width: 100%;
            }
            #post-form input, #post-form textarea {
                outline: none;
                border: 1px solid #5E34A1;
            }
            #post-form input:focus, #post-form textarea:focus{
                border: 1px solid #9D6CEC;
            }
            #post-form textarea{
                height: 500px;
            }
            #post-form div{
                display: flex;
                justify-content: center;
            }
            
            /* show 페이지 */
            #post-show p {
                border: 1px solid #eee;
                padding: 4px;
                margin: 0;
            }
            #list-button {
                margin-top: 30px;
            }
            #post-show-content {
                min-height: 500px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            @yield('content')
        </div>
    </body>
</html>
