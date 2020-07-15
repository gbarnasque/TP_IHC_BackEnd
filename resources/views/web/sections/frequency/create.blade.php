@include('web.layout.header')
    <div class="row full-height">
        <div class="col">
            <div>
                <form action="{{ route('frequencies.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group form-div-create">
                        <label for="name">Bolsista <span style="color: red;">*</span></label>
                        <select id="name" class="form-control">
                            @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                            @endforeach
                        </select>

                        <label for="day">Dia <span style="color: red;">*</span></label>
                        <input type="date" id="day" class="form-control">

                        <label for="comment">Comentário</label>
                        <textarea id="comment" class="form-control" rows="2"></textarea>
                        <button type="submit" id="send" class="btn">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('web.layout.footer')
