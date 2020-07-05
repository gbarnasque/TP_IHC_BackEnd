<?php
    use App\Bolsista;

    $bolsistas = Bolsista::all();
?>

@include('web.layout.header')
    <div class="row full-height">
        <div class="col">
            <div>
                <form>
                    <div class="form-group form-div-create">
                        <label for="name">Bolsista <span style="color: red;">*</span></label>
                        <select id="name" class="form-control">
                        <?php
                        foreach($bolsistas as $v){
                            $echo = '<option>';
                            $echo .= $b->name;
                            $echo .= '</option>';
                            echo $echo;
                        }
                        ?>
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
