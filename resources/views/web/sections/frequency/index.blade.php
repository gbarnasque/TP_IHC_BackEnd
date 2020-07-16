@include('web.layout.header')
    <div class="full-height container">
        <div>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Domingo</th>
                        <th scope="col">Segunda</th>
                        <th scope="col">Terça</th>
                        <th scope="col">Quarta</th>
                        <th scope="col">Quinta</th>
                        <th scope="col">Sexta</th>
                        <th scope="col">Sábado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $student->name }}</th>
                            @for($count = 0; $count < 7; $count++)
                                @if(in_array($count, $all_frequencies[$student->id], true))
                                    <td><img src="{{ asset('img/ic_check.svg') }}"></td>
                                @else
                                    <td></td>
                                @endif
                            @endfor
                        </tr>
                    @endforeach
                </tbody>

            </table>
{{--            <img class="img_lista" src="{{ asset('img/lista.svg') }}" />--}}
        </div>
    </div>
@include('web.layout.footer')
