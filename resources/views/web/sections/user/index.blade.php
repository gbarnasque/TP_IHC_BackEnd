@include('web.layout.header')
    <div class="container">
        <div class="row full-height justify-content-md-center">
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
                            <td> {{ $user->advisor_id? \App\User::find($user->advisor_id)->name : ' ' }} </td>
                            <td><a type="button" class="btn" href="{{ route("users.edit", $user->id) }}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@include('web.layout.footer')
