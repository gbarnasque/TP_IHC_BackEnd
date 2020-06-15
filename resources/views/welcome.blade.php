<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TP_IHC</title>
        <link rel="stylesheet" href="{!! asset('css/style.css?v='.env("ASSETS_VERSION")) !!}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="top-right icon">
                <img src="{{ asset('../img/ic_account.svg?v='.env('ASSETS_VERSION')) }}" alt="Account icon">
            </div>
            
        </div>
    </body>
</html>
