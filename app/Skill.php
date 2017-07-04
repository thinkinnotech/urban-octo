<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    public static function getSkill($skillName)
    {
        return Skill::select('id', 'skill')
            ->where('skill', $skillName)
            ->first();
    }

    public static function allSkill()
    {
        return Skill::select('id', 'skill')
            ->where('enabled', 'Y')
            ->get();
    }

    /*
     * @Author : Manish Gupta
     * @Desc : To get the Skill by its ID
     * @Date : 24/06/2017
     */
    public static function getSkillById($id)
    {
        return Skill::select('skill')
            ->where('id', $id)
            ->first();
    }
}
