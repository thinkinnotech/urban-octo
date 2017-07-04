<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 05/07/2017
 * Time: 1:01 AM
 */
?>
@extends('layout')
@section('style')
    <style>
        /**** LAYOUT ****/
        .list-inline>li {
            padding: 0 10px 0 0;
        }
        .container-pad {
            padding: 30px 15px;
        }


        /**** MODULE ****/
        .bgc-fff {
            background-color: #fff!important;
        }
        .box-shad {
            -webkit-box-shadow: 1px 1px 0 rgba(0,0,0,.2);
            box-shadow: 1px 1px 0 rgba(0,0,0,.2);
        }
        .brdr {
            border: 1px solid #ededed;
        }

        /* Font changes */
        .fnt-smaller {
            font-size: .9em;
        }
        .fnt-lighter {
            color: #bbb;
        }

        /* Padding - Margins */
        .pad-10 {
            padding: 10px!important;
        }
        .mrg-0 {
            margin: 0!important;
        }
        .btm-mrg-10 {
            margin-bottom: 10px!important;
        }
        .btm-mrg-20 {
            margin-bottom: 20px!important;
        }

        /* Color  */
        .clr-535353 {
            color: #535353;
        }
        .panel-info>.panel-heading {
            color: #fff;
            background-color: #1b8af3;
            border-color: #1b8af3;
        }
        .panel-info {
            border-color: #1b8af3;
        }
        .panel {

            border: 2px solid #1b8af3;

        }
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 0px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0px 3px 0px 0px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }

    </style>
@stop
@section('content')
    <div class="container" style="margin-top: 10px">

        <div class="col-md-10 col-md-offset-1">

            <div id="signupbox" style=" margin-top:50px" class="mainbox ">
                @if(session('key'))
                    <div class="alert alert-success">
                        {{session('key')}}
                    </div>
                @endif
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Post a Resume  </div>
                        {{-- <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="">Sign In</a></div>--}}
                    </div>
                    <div class="panel-body" style="padding-bottom: 20px">
                        <form method="post" action="{{ URL::to('/add-jobseeker-profile') }}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div id="div_id_username" class="form-group required">
                                <label for="job_title" class="control-label col-md-2  requiredField"> Username </label>
                                <div class="controls col-md-4 ">
                                    <input class="input-md  textinput textInput form-control" name="username" id="username" maxlength="30" required  placeholder="Username" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_username" class="form-group required">
                                <label for="job_title" class="control-label col-md-2  requiredField"> Password </label>
                                <div class="controls col-md-4 ">
                                    <input class="input-md  textinput textInput form-control" id="password" maxlength="30" required name="password" placeholder="Password" style="margin-bottom: 10px" type="password" />
                                </div>
                            </div>
                            <div id="div_id_username" class="form-group required">
                                <label for="job_title" class="control-label col-md-2  requiredField"> Confirm P.word </label>
                                <div class="controls col-md-4 ">
                                    <input class="input-md  textinput textInput form-control" id="cPassword" maxlength="30" required name="cPassword" placeholder="Confirm Password" style="margin-bottom: 10px" type="password" />
                                </div>
                            </div>
                            <div id="div_id_username" class="form-group required">
                                <label for="job_title" class="control-label col-md-2  requiredField"> Date of Birth </label>
                                <div class="controls col-md-4 ">
                                    <input class="input-md  textinput textInput form-control" id="password" maxlength="30" required name="dob" placeholder="Date of Birth" style="margin-bottom: 10px" type="date" />
                                </div>
                            </div>
                            <div id="div_id_username" class="form-group required">
                                <label for="job_title" class="control-label col-md-2  requiredField"> First Name </label>
                                <div class="controls col-md-4 ">
                                    <input class="input-md  textinput textInput form-control" id="fname" maxlength="30" required name="fname" placeholder="First Name" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_username" class="form-group required">
                                <label for="job_title" class="control-label col-md-2  requiredField"> Last Name </label>
                                <div class="controls col-md-4 ">
                                    <input class="input-md  textinput textInput form-control" id="lname" maxlength="30" required name="lname" placeholder="Last Name" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>

                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2  requiredField">Mobile Number   </label>
                                <div class="controls col-md-4 ">
                                    <input class="input-md textinput textInput form-control" required id="job_position"
                                           name="posted_phone" placeholder="Contact No" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2  requiredField">Contact Email  </label>
                                <div class="controls col-md-4 ">
                                    <input class="input-md textinput textInput form-control" required id="job_position" name="posted_email" placeholder="Email Id" style="margin-bottom: 10px" type="email" />
                                </div>
                            </div>
                            <div id="div_id_username" class="form-group required">
                                <label for="job_title" class="control-label col-md-2  requiredField"> Job Type </label>
                                <div class="controls col-md-4 ">
                                    <select class="form-control" name="type" id="job_type" required style="margin-bottom: 10px;">
                                        <option>Select Job Type</option>
                                        <option value="wfh">Work From Home</option>
                                        <option value="part_time">Part Time</option>
                                        <option value="full_time">Full Time</option>
                                    </select>
                                </div>
                            </div>


                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2  requiredField">Designation </label>
                                <div class="controls col-md-4 ">
                                    <select class="form-control" name="designation" required id="designation" style="margin-bottom: 10px;">
                                        <option value="">Select Designation</option>
                                        <?php
                                        $designation = \App\Designation::select('id', 'designation')->where('enabled', 'Y')->get();
                                        ?>
                                        @foreach($designation as $j)
                                            <option value="{{$j->id}}">{{$j->designation}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2  requiredField">Location </label>
                                <div class="controls col-md-4 ">
                                    <select class="form-control" name="location" style="margin-bottom: 10px;" required >
                                        <option value="">Select City</option>
                                        <?php
                                        $city = \App\City::where('enabled', 'Y')->get();
                                        ?>
                                        @foreach($city as $c)
                                            <option value="{{$c->id}}">{{$c->city}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2  requiredField">Education  </label>
                                <div class="controls col-md-4 ">
                                    <select class="form-control" name="education" style="margin-bottom: 10px;" required >
                                        <option value="">Select Education</option>
                                        <?php
                                        $education = \App\Education::where('enabled', 'Y')->get();
                                        ?>
                                        @foreach($education as $c)
                                            <option value="{{$c->id}}">{{$c->course_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2  requiredField">Salary </label>
                                <div class="controls col-md-4 ">
                                    <select class="form-control" required name="salary" id="" style="margin-bottom: 10px;" >
                                        <option value="">Salary</option>
                                        <option value="0">0 - 5000</option>
                                        <option value="5000">5000 & above </option>
                                        <option value="10000">10000 & above </option>
                                        <option value="15000">15000 & above </option>
                                        <option value="20000">20000 & above </option>
                                        <option value="40000">40000 & above </option>
                                        <option value="80000">80000 & above </option>
                                        <option value="100000">100000 & above </option>
                                        <option value="200000">200000 & above </option>
                                        <option value="500000">500000 & above </option>
                                        <option value="1000000">1000000 & above </option>
                                        <option value="1500000">1500000 & above </option>
                                        <option value="2000000">2000000 & above </option>
                                    </select>
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2  requiredField">Experience </label>
                                <div class="controls col-md-4 ">
                                    <select class="form-control" required name="expr_min" id="" style="margin-bottom: 10px;" >
                                        <option value="">Experience</option>
                                        <option value="0">Fresher</option>
                                        <option value="0.5">6 months </option>
                                        <option value="1">1 years </option>
                                        <option value="2">2 years </option>
                                        <option value="3">3 years </option>
                                        <option value="4">4 years </option>
                                        <option value="5">5 years </option>
                                        <option value="6">6 years </option>
                                        <option value="7">7 years </option>
                                        <option value="8">8 years </option>
                                        <option value="9">9 years </option>
                                        <option value="10">10 years </option>
                                    </select>
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2 requiredField">Skills  </label>
                                <div class="controls col-md-4">
                                    <select class="form-control" name="skills" style="margin-bottom: 10px;" required onchange="" multiple>
                                        <option value="">Select Skills</option>
                                        <?php
                                        $skills = \App\Skill::where('enabled', 'Y')->get();
                                        ?>
                                        @foreach($skills as $c)
                                            <option value="{{$c->id}}">{{$c->skill}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2 requiredField">Language  </label>
                                <div class="controls col-md-4 ">
                                    <select class="form-control" name="language" style="margin-bottom: 10px;" required onchange="" multiple>
                                        <option value="">Select Languages</option>
                                        <?php
                                        $languages = \App\Language::where('enabled', 'Y')->get();
                                        ?>
                                        @foreach($languages as $c)
                                            <option value="{{$c->id}}">{{$c->language}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="job_position" class="control-label col-md-2  requiredField">Gender   </label>
                                <div class="controls col-md-10 ">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="Male" required>Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="Female">Female
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="Other">Other
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div id="div_id_password2" class="form-group required">
                                <label for="id_password2" class="control-label col-md-2 requiredField"> Description </label>
                                <div class="controls col-md-10 ">
                                    <textarea class="input-md textinput textInput form-control" required rows="5" id="job_detail" name="description" placeholder="Job Full Description" style="margin-bottom: 10px"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div id="div_id_password2" class="form-group required">
                                <label for="id_password2" class="control-label col-md-2 requiredField"> Upload Resume </label>
                                <div class="controls col-md-10 ">
                                    <input type="file" name="resume" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="controls col-md-8 ">
                                    <div id="div_id_terms" class="checkbox required">
                                        <label for="id_terms" class=" requiredField">
                                            <input class="input-ms checkboxinput" required id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />
                                            Agree with the terms and conditions
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="aab controls"></div>
                                <div class="controls col-md-offset-2 col-md-4 ">
                                    <input type="submit" value="Post Resume" class="navbar-btn nav-button login" id="submit-id-signup" />
                                    {{-- or <input type="button" name="Signup" value="Sign Up with Facebook" class="btn btn btn-primary" id="button-id-signup" />--}}
                                </div>
                            </div>





                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
@section('script')
    <script>
        function  getLocation(src,container) {

            $.ajax({
                url:'/getLocation',
                type:'post',
                data:{'id':$(src).val(), '_token': '<?php echo csrf_token() ?>'},
                success:function (data) {
                    $(container).html(data)

                },
                error:function (error) {
                    alert(error)
                }
            })

        }
    </script>
@stop
