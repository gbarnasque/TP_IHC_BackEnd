<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Model
{
    use SoftDeletes;

    const ADMIN = 1;
    const STUDENT = 2;
    const ADVISOR = 3;

    protected $fillable = [
        'name',
        'email',
        'password',
        'person'
        ];

    public static function allStudents(){
        return static::select('id', 'name')->where('person', static::STUDENT)->get();
    }

    public static function allAdvisors(){
        return static::where('person', static::ADVISOR)->get();
    }

}
