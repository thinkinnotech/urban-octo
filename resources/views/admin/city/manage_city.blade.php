<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 23/06/2017
 * Time: 1:25 AM
 */
?>
@extends('admin.master')
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables/dataTables.bootstrap.css') }}">
@stop
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-xs-12 col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage City</h3>
                        </div>
                        <div class="row box-primary">
                            <div class="col-xs-4 margin">
                                <button type="button" class="btn btn-primary"
                                        onclick="window.location.href = '{{ URL::to('/admin/city-add/') }}'">Add City
                                </button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- /.box-header -->
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="city" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($cities as $city)
                                        <tr>
                                            <td>{{ ucfirst($city->city) }}</td>
                                            <td>
                                                <a data-value="{{ $city->city }}" data-href="{{ URL::to('/admin/city-update/') }}" data-id ="{{ $city->id }}" class="btn btn-info btn-sm margin-r-5" title="Update City" onclick="return updateCityModal(this);"><i class="fa fa-edit"></i></a>
                                                <a data-value="{{ $city->city }}" data-href="{{ URL::to('/admin/city-update/') }}" data-id ="{{ $city->id }}" class="btn btn-danger btn-sm" title="Delete City" onclick="return deleteCityModal(this);"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>        <!-- /.content -->
    </div>
    <div id="updateCity" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" id="update-city">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update City</h4>
                </div>
                <div class="modal-body">
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
                                <label for="city">City Name</label>
                                <input type="hidden" name="city" id="cityId"/>
                                <input type="text" class="form-control" id="cityName"
                                       placeholder="Enter City Name">
                            </div>
                        </div>
                        <!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div id="deleteCity" class="modal modal-danger fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" id="delete-city">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete City</h4>
                    </div>
                    <div class="modal-body">
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
                                <label for="city">City Name</label>
                                <input type="hidden" name="city" id="dCityId"/>
                                <input type="text" class="form-control" id="dCityName" disabled placeholder="Enter City Name">
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
        <!-- /.modal-dialog -->
@stop
@section('myjsfile')
    <!-- DataTables -->
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
@stop
@section('script')
    <script>
        $(function () {
            $('#city').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true
            });
        });

        function updateCityModal(context) {
            $("#cityName").val($(context).data("value"));
            $("#cityId").val($(context).data("id"));
            $("#updateCity").modal('show');
        }

        function deleteCityModal(context) {
            $("#dCityName").val($(context).data("value"));
            $("#dCityId").val($(context).data("id"));
            $("#deleteCity").modal('show');
        }

        $("form#update-city").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/city-update') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#cityName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input City Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Updating..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    cityId: $("#cityId").val(),
                    cityVal: $("#cityName").val(),
                },
                success: function (data) {
                    if (data.result == 'Success') {
                        $("div.successInLogin > span").html(data.response);
                        $("div.successInLogin").fadeIn().fadeOut(3000);
                        setTimeout(window.location.reload(), 3000);
                    } else if (data.result == 'Duplicate') {
                        $("div.warningInLogin > span").html(data.response);
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                    } else {
                        $("div.errorInLogin > span").html("City Updation Failed.");
                        $("div.errorInLogin").fadeIn().fadeOut(3000);
                    }
                },
                complete: function () {
                    $("button.btn-primary").html("Save Changes");
                    $("button.btn-primary").prop("disabled", false);
                },
                error: function () {
                    $("div.errorInLogin > span").html("Some Error Occurred in Server, Please Try Again Later");
                    $("div.errorInLogin").fadeIn().fadeOut(5000);
                },
            });
            e.preventDefault();
        });



        $("form#delete-city").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/city-delete') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#dCityName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input City Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Deleting..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    cityId: $("#dCityId").val(),
                },
                success: function (data) {
                    if (data.result == 'Success') {
                        $("div.successInLogin > span").html(data.response);
                        $("div.successInLogin").fadeIn().fadeOut(3000);
                        setTimeout(window.location.reload(), 3000);
                    } else {
                        $("div.errorInLogin > span").html("City Deletion Failed.");
                        $("div.errorInLogin").fadeIn().fadeOut(3000);
                    }
                },
                complete: function () {
                    $("button.btn-danger").html("Delete");
                    $("button.btn-danger").prop("disabled", false);
                },
                error: function () {
                    $("div.errorInLogin > span").html("Some Error Occurred in Server, Please Try Again Later");
                    $("div.errorInLogin").fadeIn().fadeOut(5000);
                },
            });
            e.preventDefault();
        });
    </script>
@stop


