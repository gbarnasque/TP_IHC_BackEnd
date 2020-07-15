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

        return view('web/sections/frequency/index', compact('students', 'frequencies'));
    }

    public function create()
    {
        $students = User::allStudents();

        return view('web/sections/frequency/create', compact('students'));
    }

    public function store()
    {

    }
}
