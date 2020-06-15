<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function index() {
        return view('web/sections/presence/index');
    }

    public function store() {
        return view('web/sections/presence/create');
    }
}
