<?php
/**
 * Created by PhpStorm.
 * User: dj
 * Date: 2/23/2017
 * Time: 11:37 AM
 */
?>
@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Search Vendor </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <form method="get" >
                                <div class="col-xs-8 col-xs-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="query" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <input type="submit" value="Search" class="btn btn-success"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div>
            </div>
            {{--<form action="" method="post" id="deleteAllRecord">
                {{csrf_field()}}
            </form>--}}
            <!-- Default box -->

        {{--@include('admin.createNavBox')--}}
        <!-- /.box -->

        </section>        <!-- /.content -->
    </div>
@stop

@section('script')
    <script>
        $('#select_all').click(function() {
            var c = this.checked;
            $(':checkbox').prop('checked',c);
        });

    </script>
    @stop
