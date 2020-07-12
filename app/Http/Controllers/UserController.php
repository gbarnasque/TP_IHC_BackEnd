<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('web/sections/user/index', ['users' => $users]);
    }

    public function edit($id)
    {
        $advisors = User::allAdvisors();
        $user = User::withTrashed()->findOrFail($id);

        return view('web/sections/user/edit', compact('advisors', 'user'));
    }

    public function update($id)
    {
        try {
            $user = User::withTrashed()->findOrFail($id)->first();
            $data = request()->only(
                [
                    'name',
                    'email',
                    'person'
                ]
            );

            if($password = request('password')) {
                $data['password'] = $password;
            }

            $user->update($data);
            return redirect()->route('users.index');
        }
        catch (\Exception $exception) {
            Log::alert('Erro ao editar usuário', [$exception]);
            return redirect()->route('users.index');
        }
    }

    public function create()
    {
        $advisors = User::allAdvisors();
        return view('web/sections/user/create', ['advisors' => $advisors]);
    }

    public function store()
    {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->person = request('person');

        $user->save();

        return redirect()->action('HomeController@index');
    }
}
