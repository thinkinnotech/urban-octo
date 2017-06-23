<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function addEducation(Request $request)
    {
        if ($request->isMethod('post')) {
            $educationName = $request->educationName;
            $result = json_decode(Education::getEducation($educationName), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Education Already Added.'));
            } else {
                $education = new Education();
                $education->course_name = $educationName;
                $education->created_by = $request->session()->get('userDetails')['id'];
                $education->save();
                return json_encode(array("result" => 'Success', 'response' => 'Education Successfully Added.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    public function Education()
    {
        $education = Education::allEducation();
        return view('admin.education.manage_education', array('courses' => $education));
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Update the Education
     */
    public function updateEducation(Request $request)
    {
        if ($request->isMethod('post')) {
            $educationId = $request->educationId;
            $educationVal = $request->educationVal;
            $result = json_decode(Education::getEducation($educationVal), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Education Already Added.'));
            } else {
                $education = Education::where('id', $educationId)->first();
                $education->course_name = $educationVal;
                $education->updated_by = $request->session()->get('userDetails')['id'];
                $education->save();
                return json_encode(array("result" => 'Success', 'response' => 'Education Successfully Updated.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Delete the Education
     */
    public function deleteEducation(Request $request)
    {
        if ($request->isMethod('post')) {
            $educationId = $request->educationId;
            $education = Education::where('id', $educationId)->first();
            $education->enabled = 'N';
            $education->updated_by = $request->session()->get('userDetails')['id'];
            $education->save();
            return json_encode(array("result" => 'Success', 'response' => 'Education Successfully Deleted.'));
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }
}
