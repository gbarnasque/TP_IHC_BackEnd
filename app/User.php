<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use SoftDeletes, HasApiTokens;

    const ADMIN = 1;
    const STUDENT = 2;
    const ADVISOR = 3;

    protected $fillable = [
        'name',
        'email',
        'password',
        'person',
        'advisor_id'
        ];

    public static function allStudents(){
        return static::select('id', 'name')->where('person', static::STUDENT)->get();
    }

    public static function allAdvisors(){
        return static::where('person', static::ADVISOR)->get();
    }

}
