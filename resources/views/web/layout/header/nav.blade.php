<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('img/ic_book.svg') }}" width="50" height="50" class="d-inline-block align-center" alt="Book icon">
        TP_IHC
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="textoNavbar">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-item nav-link" href="{{ route('createPresence') }}">Marcar Presença</a>
            <a class="nav-item nav-link" href="{{ route('presences') }}">Listar Presenças</a>
        </div>
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li class="order-2">
                <img src="{{ asset('img/ic_account.svg') }}" width="40" height="40"/>
            </li>
            <li class="order-1">
                <a type="button" class="btn btn-outline-secondary" href="{{ route('login') }}">Logout <span class="caret"></span></a>
            </liorder-1>
        </ul>
    </div>
</nav>
