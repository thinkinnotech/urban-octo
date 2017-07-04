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
                            <h3 class="box-title">Manage Designation</h3>
                        </div>
                        <div class="row box-primary">
                            <div class="col-xs-4 margin">
                                <button type="button" class="btn btn-primary"
                                        onclick="window.location.href = '{{ URL::to('/admin/designation-add/') }}'">Add Designation
                                </button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- /.box-header -->
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="designation" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($cities as $designation)
                                        <tr>
                                            <td>{{ ucfirst($designation->designation) }}</td>
                                            <td>
                                                <a data-value="{{ $designation->designation }}" data-href="{{ URL::to('/admin/designation-update/') }}" data-id ="{{ $designation->id }}" class="btn btn-info btn-sm margin-r-5" title="Update Designation" onclick="return updateDesignationModal(this);"><i class="fa fa-edit"></i></a>
                                                <a data-value="{{ $designation->designation }}" data-href="{{ URL::to('/admin/designation-update/') }}" data-id ="{{ $designation->id }}" class="btn btn-danger btn-sm" title="Delete Designation" onclick="return deleteDesignationModal(this);"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Designation</th>
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
    <div id="updateDesignation" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" id="update-designation">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update Designation</h4>
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
                                <label for="designation">Designation Name</label>
                                <input type="hidden" name="designation" id="designationId"/>
                                <input type="text" class="form-control" id="designationName"
                                       placeholder="Enter Designation Name">
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
    <div id="deleteDesignation" class="modal modal-danger fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" id="delete-designation">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Designation</h4>
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
                                <label for="designation">Designation Name</label>
                                <input type="hidden" name="designation" id="dDesignationId"/>
                                <input type="text" class="form-control" id="dDesignationName" disabled placeholder="Enter Designation Name">
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
            $('#designation').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true
            });
        });

        function updateDesignationModal(context) {
            $("#designationName").val($(context).data("value"));
            $("#designationId").val($(context).data("id"));
            $("#updateDesignation").modal('show');
        }

        function deleteDesignationModal(context) {
            $("#dDesignationName").val($(context).data("value"));
            $("#dDesignationId").val($(context).data("id"));
            $("#deleteDesignation").modal('show');
        }

        $("form#update-designation").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/designation-update') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#designationName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input Designation Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Updating..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    designationId: $("#designationId").val(),
                    designationVal: $("#designationName").val(),
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
                        $("div.errorInLogin > span").html("Designation Updation Failed.");
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



        $("form#delete-designation").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/designation-delete') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#dDesignationName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input Designation Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Deleting..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    designationId: $("#dDesignationId").val(),
                },
                success: function (data) {
                    if (data.result == 'Success') {
                        $("div.successInLogin > span").html(data.response);
                        $("div.successInLogin").fadeIn().fadeOut(3000);
                        setTimeout(window.location.reload(), 3000);
                    } else {
                        $("div.errorInLogin > span").html("Designation Deletion Failed.");
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


