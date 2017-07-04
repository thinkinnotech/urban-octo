<?php

namespace App\Http\Controllers;

use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignationController extends Controller
{
    //
    public function addDesignation(Request $request)
    {
        if ($request->isMethod('post')) {
            $designationName = $request->designationName;
            $result = json_decode(Designation::getDesignation($designationName), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Designation Already Added.'));
            } else {
                $designation = new Designation();
                $designation->designation = $designationName;
                $designation->created_by = $request->session()->get('userDetails')['id'];
                $designation->save();
                return json_encode(array("result" => 'Success', 'response' => 'Designation Successfully Added.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    public function Designation()
    {
        $designation = Designation::allDesignation();
        return view('admin.designation.manage_designation', array('cities' => $designation));
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Update the Designation
     */
    public function updateDesignation(Request $request)
    {
        if ($request->isMethod('post')) {
            $designationId = $request->designationId;
            $designationVal = $request->designationVal;
            $result = json_decode(Designation::getDesignation($designationVal), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Designation Already Added.'));
            } else {
                $designation = Designation::where('id', $designationId)->first();
                $designation->designation = $designationVal;
                $designation->updated_by = $request->session()->get('userDetails')['id'];
                $designation->save();
                return json_encode(array("result" => 'Success', 'response' => 'Designation Successfully Updated.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    /*
     * @Author: Manish Gupta
     * @Date : 24/06/2017
     * @Desc : To Delete the Designation
     */
    public function deleteDesignation(Request $request)
    {
        if ($request->isMethod('post')) {
            $designationId = $request->designationId;
            $designation = Designation::where('id', $designationId)->first();
            $designation->enabled = 'N';
            $designation->updated_by = $request->session()->get('userDetails')['id'];
            $designation->save();
            return json_encode(array("result" => 'Success', 'response' => 'Designation Successfully Deleted.'));
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }
}
