<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 30/06/2017
 * Time: 10:06 PM
 */
?>
@extends('admin.master')
@section('content')
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-xs-12 col-md-offset-3 col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Job Role</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" id="add-jobrole">
                            <div class="box-body">
                                <div class="alert alert-success alert-dismissible margin text-center successInLogin" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                                    <span></span>
                                </div>
                                <div class="alert alert-danger alert-dismissible margin text-center errorInLogin" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                                    <span></span>
                                </div>
                                <div class="alert alert-warning alert-dismissible margin text-center warningInLogin" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-exclamation-triangle"></i> Alert!</h4>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label for="education">Job Role</label>
                                    <input type="text" class="form-control" id="jobRole"
                                           placeholder="Enter Job Role">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>        <!-- /.content -->
    </div>
@stop

@section('script')
<script>
        $("#add-jobrole").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/add-roles') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                if($("#jobRole").val() == ''){
                    $("div.warningInLogin > span").html("Please Input Job Role.");
                    $("div.warningInLogin").fadeIn().fadeOut(3000);
                    return false;
                } else {
                    $("button.btn-primary").html("Adding..");
                    $("button.btn-primary").prop("disabled", true);
                }
            },
                data: {
                    jobRole: $("#jobRole").val(),
                },
                success: function(data) {
                if(data.result == 'Success'){
                    $('#add-jobrole').trigger("reset");
                    $("div.successInLogin > span").html(data.response);
                    $("div.successInLogin").fadeIn().fadeOut(3000);
                } else if(data.result == 'Duplicate'){
                    $("div.warningInLogin > span").html(data.response);
                    $("div.warningInLogin").fadeIn().fadeOut(3000);
                } else {
                    $("div.errorInLogin > span").html("Job Role Addition Failed.");
                    $("div.errorInLogin").fadeIn().fadeOut(3000);
                }
            },
                complete: function(){
                $("button.btn-primary").html("Submit");
                $("button.btn-primary").prop("disabled", false);
            },
                error: function() {
                $("div.errorInLogin > span").html("Some Error Occurred in Server, Please Try Again Later");
                $("div.errorInLogin").fadeIn().fadeOut(5000);
            },
            });
            e.preventDefault();
        })
        </script>
@stop

