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
      <div class="col-md-3">
          <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-list">
                            </i> &nbsp;Content</a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                          <ul class="list-group">
                              <li class="list-group-item">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                              <li class="list-group-item">Porta ac consectetur ac</li>
                              <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              <i class="fa fa-list">
                              </i> &nbsp;Modules</a>
                      </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                          <ul class="list-group">
                              <li class="list-group-item">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                              <li class="list-group-item">Porta ac consectetur ac</li>
                              <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              <i class="fa fa-list">
                              </i> &nbsp;Account</a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                          <ul class="list-group">
                              <li class="list-group-item">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                              <li class="list-group-item">Porta ac consectetur ac</li>
                              <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                              <i class="fa fa-list">
                              </i> &nbsp;Reports</a>
                      </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body">

                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-8">

          <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
              @if(count($jobs))
                  @foreach($jobs as $job)
                      <div class="media">
                          <a class="pull-left" href="" target="_parent">
                              {{--
                                                    <img alt="image" class="img-responsive" src="/http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg"></a>
                              --}}

                              <div class="clearfix visible-sm"></div>

                              <div class="media-body fnt-smaller">
                                  <a href="#" target="_parent"></a>

                                  <h4 class="media-heading">
                                      <a href="/jobdetail/{{$job->id}}" target="_parent">{{$job->title}} <small class="pull-right">2 hours ago</small></a></h4>


                                  <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                      <li><b>Exp: </b> {{$job->expr_min}}</li>

                                      <li style="list-style: none">|</li>

                                      <li>{{$job->city}}</li>

                                      <li style="list-style: none">|</li>

                                      <li>{{$job->salary_min}} - {{$job->salary_max}} &nbsp;lakh/anum</li>
                                  </ul>

                                  <p class="hidden-xs">{{$job->description}}
                                      ...</p><span class="fnt-smaller fnt-lighter fnt-arial">Company: {{$job->company_name}}</span>
                              </div>
                          </a>
                      </div>

                  @endforeach
                  @endif

          </div>

      </div>
  </div>
@stop