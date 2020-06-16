<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TP_IHC</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{!! asset('css/style.css?v='.env("ASSETS_VERSION")) !!}">
    </head>
    <body>
        <div class="full-height">
            <div class="row align-items-center full-height text-center">
                <div class="col">
                    <img src="{{ asset('img/ic_book.svg?v='.env("ASSETS_VERSION")) }}"/>
                    <div>
                        <label for="mail" class="form-login">Email:</pclas>
                        <input id="mail" class="form-control" type="email">
                        <label for="password" class="form-login">Senha:</label>
                        <input id="password" class="form-control" type="password">
                        <div class="btn form-login">
                            <a type="button" class="btn btn-outline-dark" href="{{ route('home') }}">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="/profile">
                @csrf
            </form>
        </div>
    </body>
</html>
