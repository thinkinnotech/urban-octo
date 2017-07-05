<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    //
    protected $table = 'jobseeker';
    protected $guarded = ['id'];
    public static function getJobSeeker($username)
    {
        return Jobseeker::select('id', 'username')
            ->where('username', $username)
            ->first();
    }
}
