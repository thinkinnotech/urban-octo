<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = 'designation';

    public static function getDesignation($designationName)
    {
        return Designation::select('id', 'designation')
            ->where('designation', $designationName)
            ->first();
    }

    public static function allDesignation()
    {
        return Designation::select('id', 'designation')
            ->where('enabled', 'Y')
            ->get();
    }

    /*
     * @Author : Manish Gupta
     * @Desc : To get the Designation by its ID
     * @Date : 24/06/2017
     */
    public static function getDesignationById($id)
    {
        return Designation::select('designation')
            ->where('id', $id)
            ->first();
    }
}
