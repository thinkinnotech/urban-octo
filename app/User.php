<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";

//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];

    public static function getUserDetails($user, $pass)
    {
        return User::select('id', 'fname', 'lname', 'username', 'user_type', 'email', 'phone', 'created_at')
            ->where('username', $user)
            ->where('password', $pass)
            ->first();
    }
}
