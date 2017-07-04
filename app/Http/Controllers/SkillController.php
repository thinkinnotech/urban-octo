<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function addSkill(Request $request)
    {
        if ($request->isMethod('post')) {
            $skillName = $request->skillName;
            $result = json_decode(Skill::getSkill($skillName), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Skill Already Added.'));
            } else {
                $skill = new Skill();
                $skill->skill = $skillName;
                $skill->created_by = $request->session()->get('userDetails')['id'];
                $skill->save();
                return json_encode(array("result" => 'Success', 'response' => 'Skill Successfully Added.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    public function Skill()
    {
        $skill = Skill::allSkill();
        return view('admin.skill.manage_skill', array('cities' => $skill));
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Update the Skill
     */
    public function updateSkill(Request $request)
    {
        if ($request->isMethod('post')) {
            $skillId = $request->skillId;
            $skillVal = $request->skillVal;
            $result = json_decode(Skill::getSkill($skillVal), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Skill Already Added.'));
            } else {
                $skill = Skill::where('id', $skillId)->first();
                $skill->skill = $skillVal;
                $skill->updated_by = $request->session()->get('userDetails')['id'];
                $skill->save();
                return json_encode(array("result" => 'Success', 'response' => 'Skill Successfully Updated.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Delete the Skill
     */
    public function deleteSkill(Request $request)
    {
        if ($request->isMethod('post')) {
            $skillId = $request->skillId;
            $skill = Skill::where('id', $skillId)->first();
            $skill->enabled = 'N';
            $skill->updated_by = $request->session()->get('userDetails')['id'];
            $skill->save();
            return json_encode(array("result" => 'Success', 'response' => 'Skill Successfully Deleted.'));
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }
}
