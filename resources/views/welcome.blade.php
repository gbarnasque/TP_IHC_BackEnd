@include('web.layout.header')
    <div class="row align-items-center full-height text-center">
        <div class="col">
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="#">Marcar Presença</a>
            </div>
        </div>
        <div class="col">
            <div class="btn">
                <a type="button" class="btn btn-outline-dark btn-lg" href="{{ route('presences') }}">Verificar Presenças</a>
            </div>
        </div>
    </div>
@include('web.layout.footer')
