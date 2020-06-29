<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
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
        return static::where('person', static::STUDENT)->get();
    }

    public static function allAdvisors(){
        return static::where('person', static::ADVISOR)->get();
    }

}
