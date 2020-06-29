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
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->name }}</th>
                        <td>{{ $user->email }}</td>
                        <td> Implementar </td>
                        <td><a type="button" class="btn" href="#">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('web.layout.footer')
