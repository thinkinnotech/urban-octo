<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    public function addRoles(Request $request)
    {
        if ($request->isMethod('post')) {
            $jobRole = $request->jobRole;
            $result = json_decode(Role::getRole($jobRole), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Role Already Added.'));
            } else {
                $roles = new Role();
                $roles->name = $jobRole;
                $roles->created_by = $request->session()->get('userDetails')['id'];
                $roles->save();
                return json_encode(array("result" => 'Success', 'response' => 'Role Successfully Added.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    public function roles()
    {
        $roles = Role::allRole();
        return view('admin.roles.manage_job_role', array('roles' => $roles));
    }

    /*
     * @Author: Manish Gupta
     * @Date : 30/06/2017
     * @Desc : To Update the Roles
     */
    public function updateRoles(Request $request)
    {
        if ($request->isMethod('post')) {
            $rolesId = $request->rolesId;
            $rolesVal = $request->rolesVal;
            $result = json_decode(Role::getRole($rolesVal), true);
            if (isset($result) && !empty($result)) {
                return json_encode(array("result" => 'Duplicate', 'response' => 'Role Already Added.'));
            } else {
                $roles = Role::where('id', $rolesId)->first();
                $roles->name = $rolesVal;
                $roles->updated_by = $request->session()->get('userDetails')['id'];
                $roles->save();
                return json_encode(array("result" => 'Success', 'response' => 'Role Successfully Updated.'));
            }
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }

    /*
     * @Author: Manish Gupta
     * @Date : 30/06/2017
     * @Desc : To Delete the Roles
     */
    public function deleteRoles(Request $request)
    {
        if ($request->isMethod('post')) {
            $rolesId = $request->rolesId;
            $roles = Role::where('id', $rolesId)->first();
            $roles->enabled = 'N';
            $roles->updated_by = $request->session()->get('userDetails')['id'];
            $roles->save();
            return json_encode(array("result" => 'Success', 'response' => 'Role Successfully Deleted.'));
        } else {
            return json_encode(array("result" => 'Failed', 'response' => 'Invalid Request'));
        }
    }
}
