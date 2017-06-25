<?php
/**
 * Created by PhpStorm.
 * User: dj
 * Date: 6/22/2017
 * Time: 10:25 PM
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

    </style>
@stop
@section('content')
    <div class="container" style="margin-top: 10px">

        <div class="col-md-8 col-md-offset-2">

            <div id="signupbox" style=" margin-top:50px" class="mainbox ">
                @if(session('key'))
                    <div class="alert alert-success">
                        {{session('key')}}
                    </div>

                @endif
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up  </div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="">Sign In</a></div>
                    </div>
                    <div class="panel-body" style="padding-bottom: 20px">
                        <form method="post" action="/job">
                            {{csrf_field()}}



                             {{--   <div id="div_id_select" class="form-group required">
                                    <label for="id_select"  class="control-label col-md-4  requiredField"> Select<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                        <label class="radio-inline"><input type="radio" checked="checked" name="select" id="id_select_1" value="S"  style="margin-bottom: 10px">Knowledge Seeker</label>
                                        <label class="radio-inline"> <input type="radio" name="select" id="id_select_2" value="P"  style="margin-bottom: 10px">Knowledge Provider </label>
                                    </div>
                                </div>--}}
                              {{--  <div id="div_id_As" class="form-group required">
                                    <label for="id_As"  class="control-label col-md-4  requiredField">As<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                        <label class="radio-inline"> <input type="radio" name="As" id="id_As_1" value="I"  style="margin-bottom: 10px">Individual </label>
                                        <label class="radio-inline"> <input type="radio" name="As" id="id_As_2" value="CI"  style="margin-bottom: 10px">Company/Institute </label>
                                    </div>
                                </div>--}}
                                <div id="div_id_username" class="form-group required">
                                    <label for="job_title" class="control-label col-md-4  requiredField"> Job Title<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md  textinput textInput form-control" id="title" maxlength="30" name="title" placeholder="Job Title" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_username" class="form-group required">
                                    <label for="job_title" class="control-label col-md-4  requiredField"> Job Type<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md  textinput textInput form-control" id="type" maxlength="30" name="type" placeholder="Job Title" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>


                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Job Role <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="role" placeholder="Position " style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Job Company <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="company_name" placeholder="Create a password" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>

                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">City<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <select class="form-control" name="city" style="margin-bottom: 10px;">
                                            <option>Select City</option>
                                            <option>Mumbai</option>
                                            <option>pune </option>
                                            <option>Banglore</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Locality <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="locality" placeholder="Job Full Address" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Min Salary  <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="salary_min" placeholder="Min Salary" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Max Salary <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="salary_max" placeholder="Max Salary Offered" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Min Experience <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="expr_min" placeholder="Min Experience Required" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Max Experience <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="expr_max" placeholder="Max Expereince " style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Skills Required <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="skills" placeholder="Skills Required For job" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Langueage <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="language" placeholder="Language" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Contact Number  <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="posted_phone" placeholder="Hr Contact No" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Contact Email <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="job_position" name="posted_email" placeholder="Hr Email Id" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="job_position" class="control-label col-md-4  requiredField">Display Contact  <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="display_contact" id="optionsRadios1" value="y" checked>
                                                Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="display_contact" id="optionsRadios1" value="n" checked>
                                               no
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div id="div_id_password2" class="form-group required">
                                    <label for="id_password2" class="control-label col-md-4  requiredField"> Job Details<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <textarea class="input-md textinput textInput form-control" rows="5" id="job_detail" name="description" placeholder="Job Full Description" style="margin-bottom: 10px" type="password" >

                                        </textarea>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls col-md-offset-4 col-md-8 ">
                                        <div id="div_id_terms" class="checkbox required">
                                            <label for="id_terms" class=" requiredField">
                                                <input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />
                                                Agree with the terms and conditions
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="aab controls col-md-4 "></div>
                                    <div class="controls col-md-8 ">
                                        <input type="submit" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" />
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

    </script>
    @stop