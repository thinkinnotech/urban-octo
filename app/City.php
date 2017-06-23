<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table = 'city';

    public static function getCity($cityName)
    {
        return City::select('id', 'city')
            ->where('city', $cityName)
            ->first();
    }

    public static function allCity()
    {
        return City::select('id', 'city')
            ->where('enabled', 'Y')
            ->get();
    }

    /*
     * @Author : Manish Gupta
     * @Desc : To get the City by its ID
     * @Date : 24/06/2017
     */
    public static function getCityById($id)
    {
        return City::select('city')
            ->where('id', $id)
            ->first();
    }
}
