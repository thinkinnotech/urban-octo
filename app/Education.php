<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';

    public static function getEducation($cityName)
    {
        return Education::select('id', 'course_name')
            ->where('course_name', $cityName)
            ->first();
    }

    public static function allEducation()
    {
        return Education::select('id', 'course_name')
            ->where('enabled', 'Y')
            ->get();
    }

    /*
     * @Author : Manish Gupta
     * @Desc : To get the Education by its ID
     * @Date : 24/06/2017
     */
    public static function getEducationById($id)
    {
        return Education::select('course_name')
            ->where('id', $id)
            ->first();
    }
}
