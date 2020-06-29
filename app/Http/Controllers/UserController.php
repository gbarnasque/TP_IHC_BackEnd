<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('web/sections/user/index', ['users' => $users]);
    }

    public function create() {
        return view('web/sections/user/create');
    }

    public function store() {

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
