<?php

namespace App\Http\Controllers;

use App\Jobseeker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSeekerController extends Controller
{
    //
    public function create(Request $request){
        $username = $request->username;
        $result = json_decode(Jobseeker::getJobSeeker($username), true);
        if (isset($result) && !empty($result)) {
            return back()->withInput()->with('key', 'Username already exist.');
        } else {
            $gender = $request->gender;
            if($gender == 'Male'){
                $request->request->add(['gender' => "M"]);
            } else if($gender == 'Female'){
                $request->request->add(['gender' => "F"]);
            } else {
                $request->request->add(['gender' => "O"]);
            }
            $file = $request->file('resume');
            //Move Uploaded File
            $destinationPath = 'uploads';
//            $fileName = "user_".$file->getClientOriginalName();
            $file->move($destinationPath,"user_".$file->getClientOriginalName());
            $request->resume = "user_".$file->getClientOriginalName();
            $job = Jobseeker::create($request->except('_token', 'cPassword', 'terms'));
            if($job){
                return back()->with('key', 'Successfully Uploaded.');
            } else {
                return back()->withInput()->with('key', 'Something is invalid.');
            }
        }
    }
}
