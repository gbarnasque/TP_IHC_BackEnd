<?php
    use App\Orientador;

    $orientadores = Orientador::all();
?>
@include('web.layout.header')
<div class="row full-height">
    <div class="col">
        <div>
            <form id="target">
                <div class="form-group form-div-create">
                    <label for="nome">Nome: <span style="color: red;">*</span></label>
                    <input type="text" id="nome" class="form-control">

                    <label for="email">Email: <span style="color: red;">*</span></label>
                    <input type="email" id="email" class="form-control">

                    <label for="senha">Senha: <span style="color: red;">*</span></label>
                    <input type="password" id="senha" class="form-control">
                    <!--
                    <label for="comment">Atribuição: <span style="color: red;">*</span></label>
                    <div class="form-check">
                        <input type="radio" id="orientador" name="atribuicao" class="form-check-input" value="orientador">
                        <label class="form-check-label" for="orientador">
                            Orientador
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="bolsista" name="atribuicao" class="form-check-input" value="bolsista">
                        <label class="form-check-label" for="bolsista">
                            Bolsista
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="admin" name="atribuicao" class="form-check-input" value="admin">
                        <label class="form-check-label" for="admin">
                            Administrador
                        </label>
                    </div>-->

                    <label for="orientador">Orientador: </label>
                    <select id="orientador" class="form-control">
                        <?php
                        foreach($orientadores as $o){
                            $echo = '<option>';
                            $echo .= $o->nome;
                            $echo .= '</option>';
                            echo $echo;
                        }
                        ?>
                        </select>

                    <button type="submit" id="send" class="btn btn-outline-dark btn-lg mt-3">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
$('#target').submit(function(e){
    e.preventDefault();
    var nome = $('#nome').val();
    var email = $('#email').val();
    var senha = $('#senha').val();
    var orientador = $('#orientador').val();
    //var atribuicao = $("input[name='atribuicao']:checked").val();

    var data = {
        'nome': nome,
        'email': email,
        'senha': senha,
        'orientador': orientador
    };


    $.ajax({
    dataType: 'json',
    contentType: 'application/json',
    url: '../api/bolsista/insere',
    type: 'PUT',
    success: function(retorno){
        console.log(retorno.sucesso);
        console.log(retorno.mensagem);
    },
    data: JSON.stringify(data)
  })
});
</script>
@include('web.layout.footer')
