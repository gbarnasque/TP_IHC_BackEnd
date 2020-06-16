@include('web.layout.header')
    <div class="row align-items-center full-height text-center">
        <div class="col">
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('storePresence') }}">Marcar presença</a>
            </div>
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('presences') }}">Listar presenças</a>
            </div>
        </div>
        <div class="col">
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('createUser') }}">Cadastrar usuário</a>
            </div>
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('users') }}">Listar usuários</a>
            </div>
        </div>
    </div>
@include('web.layout.footer')
