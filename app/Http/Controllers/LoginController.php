<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*
     * @Author : Manish Gupta
     * @Date : 19th June, 2017
     * @Desc : For Login
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $username = $request->username;
            $password = $request->password;
            $result = User::getUserDetails($username, $password);
            if(!empty($result)){
                $request->session()->put('userDetails', $result);
                return json_encode(array("result"=>"Success"));
            } else {
                return json_encode(array("result"=>"Failed"));
            }
        }
    }
}
