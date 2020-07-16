<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $today = Carbon::today()->format('Y-m-d');

        return view('web/sections/frequency/create', compact('students', 'today'));
    }

    public function store()
    {
        $frequency = new Frequency();

        $frequency->student_id = request('student_id');
        $frequency->created_at = Carbon::createFromFormat('Y-m-d', request('day'))->toDateTimeString();
        $frequency->updated_at = Carbon::today()->toDateTimeString();
        $frequency->note = request('note');

        $frequency->save();

        return redirect()->action('FrequencyController@index');
    }
}
