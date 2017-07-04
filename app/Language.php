<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';

    public static function getLanguage($languageName)
    {
        return Language::select('id', 'language')
            ->where('language', $languageName)
            ->first();
    }

    public static function allLanguage()
    {
        return Language::select('id', 'language')
            ->where('enabled', 'Y')
            ->get();
    }

    /*
     * @Author : Manish Gupta
     * @Desc : To get the Language by its ID
     * @Date : 24/06/2017
     */
    public static function getLanguageById($id)
    {
        return Language::select('language')
            ->where('id', $id)
            ->first();
    }
}
