<?php

namespace App\Http\Controllers;

use App\Frequency;
use App\User;

class FrequencyController extends Controller
{
    public function index()
    {
        $students = User::allStudents();
        $frequencies = [];

        foreach ($students as $student) {
            $frequencies[$student->id] = Frequency::frequenciesThisWeek($student->id);
        }

        return view('web/sections/presence/index', compact('students', 'frequencies'));
    }

    public function create()
    {
        return view('web/sections/presence/create');
    }

    public function store()
    {

    }
}
