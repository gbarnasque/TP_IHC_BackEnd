@include('web.layout.header')
    <div class="row align-items-center full-height text-center">
        <div class="col">
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('frequencies.create') }}">Marcar presença</a>
            </div>
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('frequencies.index') }}">Listar presenças</a>
            </div>
        </div>
        <div class="col">
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('users.create') }}">Cadastrar usuário</a>
            </div>
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('users.index') }}">Listar usuários</a>
            </div>
        </div>
    </div>
@include('web.layout.footer')
