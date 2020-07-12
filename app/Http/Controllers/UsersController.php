<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('web/sections/user/index', ['users' => $users]);
    }

    public function edit(User $id)
    {
        $advisors = User::allAdvisors();
        $user = User::find($id)->first();
        return view('web/sections/user/edit', compact('advisors', 'user'));
    }

    public function update(User $id)
    {
        try {
            $user = User::find($id)->first();
            $data = request()->only(
                [
                    'name',
                    'mail',
                    'radio_person'
                ]
            );

            if($password = request('password')) {
                $data['password'] = $password;
            }

            $user->update($data);
        }
        catch (\Exception $exception) {
            Log::alert('Erro ao editar usuário', [$exception]);
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
        $user->email = request('mail');
        $user->password = request('password');
        $user->person = request('radio_person');

        $user->save();

        return redirect()->action('HomeController@index');
    }
}
