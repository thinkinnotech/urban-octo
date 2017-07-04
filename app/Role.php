<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'jobrole';

    public static function getRole($cityName)
    {
        return Role::select('id', 'name')
            ->where('name', $cityName)
            ->first();
    }

    public static function allRole()
    {
        return Role::select('id', 'name')
            ->where('enabled', 'Y')
            ->get();
    }

    /*
     * @Author : Manish Gupta
     * @Desc : To get the Role by its ID
     * @Date : 24/06/2017
     */
    public static function getRoleById($id)
    {
        return Role::select('name')
            ->where('id', $id)
            ->first();
    }
}
