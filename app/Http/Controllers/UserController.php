<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('web/sections/user/index');
    }

    public function create() {
        return view('web/sections/user/create');
    }

    public function store() {

    }

    public function edit() {

    }
}
