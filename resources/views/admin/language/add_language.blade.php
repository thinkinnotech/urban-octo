<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 22/06/2017
 * Time: 1:21 AM
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
                            <h3 class="box-title">Add Language</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" id="add-language">
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
                                    <label for="language">Language Name</label>
                                    <input type="text" class="form-control" id="languageName"
                                           placeholder="Enter Language Name">
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
        $("#add-language").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/add-language') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#languageName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input Language Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Adding..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    languageName: $("#languageName").val(),
                },
                success: function(data) {
                    if(data.result == 'Success'){
                        $('#add-language').trigger("reset");
                        $("div.successInLogin > span").html(data.response);
                        $("div.successInLogin").fadeIn().fadeOut(3000);
                    } else if(data.result == 'Duplicate'){
                        $("div.warningInLogin > span").html(data.response);
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                    } else {
                        $("div.errorInLogin > span").html("Language Addition Failed.");
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

