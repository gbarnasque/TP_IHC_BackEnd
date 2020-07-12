@include('web.layout.header')
<div class="row">
    <h2>
        Editar {{ $user->name }}
    </h2>
</div>
<div class="row full-height">
    <div class="col">
        <div>
            <form action="{!! route('users.update', $user->id) !!}" method="post">
                @method('PUT')
                {{ csrf_field() }}
                <div class="form-group form-div-create">
                    <label for="name">Nome <span style="color: red;">*</span></label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" disabled>

                    <label for="mail">Email <span style="color: red;">*</span></label>
                    <input type="email" name="mail" id="mail" class="form-control" value="{{ $user->email }}">

                    <label for="password">Senha <span style="color: red;">*</span></label>
                    <input type="password" name="password" id="password" class="form-control">

                    <label for="comment">Role<span style="color: red;">*</span></label>
                    <div class="form-check">
                        <input name="radio_person" type="radio" id="advisor" class="form-check-input" value="3" {{
                                $user->person == 3 ? 'checked' : ''}}>
                        <label class="form-check-label" for="advisor">
                            Orientador
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="radio_person" type="radio" id="scholarship" class="form-check-input" value="2" {{
                                $user->person == 2 ? 'checked' : ''}}>
                        <label class="form-check-label" for="scholarship">
                            Bolsista
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="radio_person" type="radio" id="admin" class="form-check-input" value="1" {{
                                $user->person == 1 ? 'checked' : ''}}>
                        <label class="form-check-label" for="admin">
                            Administrador
                        </label>
                    </div>

                    <label for="advisor">Orientador</label>
                    <select name="advisor_name" id="advisor_name" class="form-control">
                        <option value="">:: SELECIONE ::</option>
                        @foreach($advisors as $advisor)
                            <option value="{{ $advisor->id }}">{{ $advisor->name . " - " . $advisor->email }} </option>
                        @endforeach
                    </select>

                    <button type="submit" id="send" class="btn">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('web.layout.footer')