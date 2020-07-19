<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frequency extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'note',
        'student_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public static function frequenciesThisWeek($id){
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->toDateTimeString();
        $weekEndDate = $now->endOfWeek()->toDateTimeString();

        return static::where('student_id', $id)->whereBetween('created_at', [$weekStartDate, $weekEndDate])->get();
    }

    public static function frequenciesThisMonth($id){
        $now = Carbon::now();
        $monthStartDate = $now->startOfMonth()->toDateTimeString();
        $monthEndDate = $now->endOfMonth()->toDateTimeString();

        return static::where('student_id', $id)->whereBetween('created_at', [$monthStartDate, $monthEndDate])->get();
    }

}
