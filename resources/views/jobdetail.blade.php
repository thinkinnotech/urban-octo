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

        <div class="col-md-8">

            <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                <div class="media">
                    <a class="pull-left" href="#" target="_parent">
                        {{--
                                              <img alt="image" class="img-responsive" src="/http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg"></a>
                        --}}

                        <div class="clearfix visible-sm"></div>

                        <div class="media-body fnt-smaller">
                            <a href="#" target="_parent"></a>

                            <h3 class="media-heading">
                               {{$job->title}}  <small class="pull-right">2 hours ago</small></h3>
                            <br>


                            <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                <li><b>Exp: </b> {{$job->expr_min}} years</li>

                                <li style="list-style: none">|</li>

                                <li>{{$job->city}}</li>

                                <li style="list-style: none">|</li>

                                <li>{{$job->expr_min}} - {{$job->expr_max}} lakh/anum</li>
                            </ul>

                            <br>
                            <div class="btn-group">
                                <button class="navbar-btn nav-button wow bounceInRight login animated" data-wow-delay="0.8s" data-toggle="modal" data-target="#loginModal" style="visibility: visible; animation-delay: 0.8s; animation-name: bounceInRight;">
                                    Apply</button>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 style="font-weight: bold;background-color: #f5f5f5;padding: 5px">Details</h4>
                                    <table class="table .table-striped">
                                        <tr><td>Company: </td><td> {{$job->company_name}}</td></tr>
                                        <tr><td>Location: </td><td> {{$job->city}} </td></tr>
                                        <tr><td>Min - Salary: </td><td> {{$job->salary_min}} lacs </td></tr>
                                        <tr><td>Max - Salary: </td><td> {{$job->salary_max}} lacs </td></tr>
                                        <tr><td>Notice Period: </td><td> max 15 days</td></tr>
                                        <tr><td>Experience : </td><td> {{$job->expr_min}} - {{$job->expr_max}} years</td></tr>
                                    </table>
                                </div>
                            </div>
                            <p class="hidden-xs">{{$job->description}}
                                ...</p><span class="fnt-smaller fnt-lighter fnt-arial">Company: {{$job->company_name}}</span>
                        </div>
                </div>
            </div>

        </div>
    </div>
@stop