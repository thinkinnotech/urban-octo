<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';

    public static function getLocation($locationName, $cityId){
        return Location::select('id', 'location')
            ->where('location', $locationName)
            ->where('city_id', $cityId)
            ->first();
    }

    public static function allLocation(){
        return Location::select('id', 'location', 'city_id')
            ->where('enabled', 'Y')
            ->get();
    }
}
