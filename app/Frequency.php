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
        'user_id'
    ];

    public static function frequenciesThisWeek($id){
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->toDateTimeString();
        $weekEndDate = $now->endOfWeek()->toDateTimeString();

        return static::where('student_id', $id)->whereBetween('created_at', [$weekStartDate, $weekEndDate])->get();
    }

}
