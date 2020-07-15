@include('web.layout.header')
    <div class="full-height container">
        <div>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Segunda</th>
                        <th scope="col">Terça</th>
                        <th scope="col">Quarta</th>
                        <th scope="col">Quinta</th>
                        <th scope="col">Sexta</th>
                        <th scope="col">Sábado</th>
                        <th scope="col">Domingo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Isabela Oliveira</th>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td></td>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Jessica Pereira</th>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td></td>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">João Silva</th>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td></td>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td></td>
                        <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>

            </table>
{{--            <img class="img_lista" src="{{ asset('img/lista.svg') }}" />--}}
        </div>
    </div>
@include('web.layout.footer')
