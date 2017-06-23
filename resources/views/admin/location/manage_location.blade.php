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
                            <h3 class="box-title">Manage Location</h3>
                        </div>
                        <div class="row box-primary">
                            <div class="col-xs-4 margin">
                                <button type="button" class="btn btn-primary"
                                        onclick="window.location.href = '{{ URL::to('/admin/location-add/') }}'">Add Location
                                </button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- /.box-header -->
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="location" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>City</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($locations as $location)
                                        <tr>
                                            <td>{{ ucfirst(\App\City::getCityById($location->city_id)->city) }}</td>
                                            <td>{{ ucfirst($location->location) }}</td>
                                            <td>
                                                <a data-city="{{ $location->city_id }}" data-value="{{ $location->location }}" data-href="{{ URL::to('/admin/location-update/') }}" data-id ="{{ $location->id }}" class="btn btn-info btn-sm margin-r-5" title="Update Location" onclick="return updateLocationModal(this);"><i class="fa fa-edit"></i></a>
                                                <a data-city="{{ $location->city_id }}" data-value="{{ $location->location }}" data-href="{{ URL::to('/admin/location-update/') }}" data-id ="{{ $location->id }}" class="btn btn-danger btn-sm" title="Delete Location" onclick="return deleteLocationModal(this);"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Location</th>
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
    <div id="updateLocation" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" id="update-location">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update Location</h4>
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
                            <!-- select -->
                            <div class="form-group">
                                <label>Select City</label>
                                <select class="form-control" id="cityName">
                                    <option value="">Please Select City</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->city }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Location Name</label>
                                <input type="hidden" name="location" id="locationId"/>
                                <input type="text" class="form-control" id="locationName" placeholder="Enter Location Name">
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
    <div id="deleteLocation" class="modal modal-danger fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" id="delete-location">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Location</h4>
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
                            <!-- select -->
                            <div class="form-group">
                                <label>Select City</label>
                                <select class="form-control" id="dCityName" disabled="">
                                    <option value="">Please Select City</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->city }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Location Name</label>
                                <input type="hidden" name="location" id="dLocationId"/>
                                <input type="text" class="form-control" id="dLocationName" disabled placeholder="Enter Location Name">
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
            $('#location').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true
            });
        });

        function updateLocationModal(context) {
            $("#cityName").val($(context).data("city"));
            $("#locationName").val($(context).data("value"));
            $("#locationId").val($(context).data("id"));
            $("#updateLocation").modal('show');
        }

        function deleteLocationModal(context) {
            $("#dCityName").val($(context).data("city"));
            $("#dLocationName").val($(context).data("value"));
            $("#dLocationId").val($(context).data("id"));
            $("#deleteLocation").modal('show');
        }

        $("form#update-location").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/location-update') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#cityName").val() == ''){
                        $("div.warningInLogin > span").html("Please Select City.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    }
                    if($("#locationName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input Location Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Updating..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    locationId: $("#locationId").val(),
                    cityVal: $("#cityName").val(),
                    locationVal: $("#locationName").val(),
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
                        $("div.errorInLogin > span").html("Location Updation Failed.");
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



        $("form#delete-location").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/location-delete') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#dLocationName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input Location Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Deleting..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    locationId: $("#dLocationId").val(),
                },
                success: function (data) {
                    if (data.result == 'Success') {
                        $("div.successInLogin > span").html(data.response);
                        $("div.successInLogin").fadeIn().fadeOut(3000);
                        setTimeout(window.location.reload(), 3000);
                    } else {
                        $("div.errorInLogin > span").html("Location Deletion Failed.");
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


