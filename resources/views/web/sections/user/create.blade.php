@include('web.layout.header')
<div class="row">
    <h2>
        Novo Usuário
    </h2>
</div>
<div class="row full-height">
    <div class="col">
        <div>
            <form action="{!! route('users.store') !!}" method="post">
                {{ csrf_field() }}
                <div class="form-group form-div-create">
                    <label for="name">Nome <span style="color: red;">*</span></label>
                    <input type="text" name="name" id="name" class="form-control">

                    <label for="mail">Email <span style="color: red;">*</span></label>
                    <input type="email" name="email" id="mail" class="form-control">

                    <label for="password">Senha <span style="color: red;">*</span></label>
                    <input type="password" name="password" id="password" class="form-control">

                    <label for="comment">Role<span style="color: red;">*</span></label>
                    <div class="form-check">
                        <input name="person" type="radio" id="advisor" class="form-check-input" value="3">
                        <label class="form-check-label" for="advisor">
                            Orientador
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="person" type="radio" id="scholarship" class="form-check-input" value="2">
                        <label class="form-check-label" for="scholarship">
                            Bolsista
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="person" type="radio" id="admin" class="form-check-input" value="1">
                        <label class="form-check-label" for="admin">
                            Administrador
                        </label>
                    </div>

                    <label for="advisor">Orientador</label>
                    <select name="advisor_name" id="advisor_name" class="form-control">
                        <option value="">:: SELECIONE ::</option>
                        @foreach($advisors as $advisor)
                            <option value="{{ $advisor->id }}">{{ $advisor->name . " - " . $advisor->email }}</option>
                        @endforeach
                    </select>

                    <button type="submit" id="send" class="btn">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('web.layout.footer')
