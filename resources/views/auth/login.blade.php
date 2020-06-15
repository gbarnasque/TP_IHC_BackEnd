<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TP_IHC</title>
        <link rel="stylesheet" href="{!! asset('css/style.css?v='.env("ASSETS_VERSION")) !!}">
    </head>
    <body>
        <div class="full-height">
            <div class="container">
                <div class="center">
                    <img src="{{ asset('img/ic_book.svg?v='.env("ASSETS_VERSION")) }}"/>
                </div>
            </div>
            <div class="body container">
                <div class="login_form center">
                    <p id="user">Email:</p>
                    <input id="mail" class="fieldLogin" type="email">
                    <p id="password">Senha:</p>
                    <input id="password" class="fieldLogin" type="password">
                    <div id="login" class="btn_div">
                        <a class="btn" href="{{ route('home') }}">Login</a>
                    </div>
                    <form method="POST" action="/profile">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

{{--        <div class="div_background">--}}
{{--            <img class="background" src="{{ asset('img/background.svg?v='.env("ASSETS_VERSION")) }}">--}}
{{--        </div>--}}
    </body>
</html>
