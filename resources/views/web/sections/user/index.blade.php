@include('web.layout.header')
    <div class="row full-height">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Orientador</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Isabela Oliveira</th>
                    <td>ioliveira@ufrgs.br</td>
                    <td>Carlos Silveira</td>
                    <td><a type="button" class="btn" href="#">Edit</a></td>
                </tr>
                <tr>
                    <th scope="row">Jessica Pereira</th>
                    <td>jessicap@ufrgs.br</td>
                    <td>Claudia Fernandes</td>
                    <td><a type="button" class="btn" href="#">Edit</a></td>
                </tr>
                <tr>
                    <th scope="row">João Silva</th>
                    <td>jsilva@ufrgs.br</td>
                    <td>Rogério Fagundes</td>
                    <td><a type="button" class="btn" href="#">Edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@include('web.layout.footer')
