@include('web.layout.header')
    <div class="row">
        <div class="col">
            <h2 class="title">
                Marcar Presença
            </h2>
        </div>
    </div>
    <div class="row full-height">
        <div class="col">
            <div>
                <form action="{{ route('frequencies.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group form-div-create">
                        <label for="name">Bolsista <span style="color: red;">*</span></label>
                        <select name="student_id" id="name" class="form-control">
                            @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                            @endforeach
                        </select>

                        <label for="day">Dia <span style="color: red;">*</span></label>
                        <input name="day" type="date" id="day" class="form-control" max="{{ $today }}">

                        <label for="comment">Comentário</label>
                        <textarea name="note" id="comment" class="form-control" rows="2"></textarea>

                        <button type="submit" id="send" class="btn">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('web.layout.footer')
