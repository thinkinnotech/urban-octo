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
                            <h3 class="box-title">Manage Language</h3>
                        </div>
                        <div class="row box-primary">
                            <div class="col-xs-4 margin">
                                <button type="button" class="btn btn-primary"
                                        onclick="window.location.href = '{{ URL::to('/admin/language-add/') }}'">Add Language
                                </button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- /.box-header -->
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="language" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Language</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($cities as $language)
                                        <tr>
                                            <td>{{ ucfirst($language->language) }}</td>
                                            <td>
                                                <a data-value="{{ $language->language }}" data-href="{{ URL::to('/admin/language-update/') }}" data-id ="{{ $language->id }}" class="btn btn-info btn-sm margin-r-5" title="Update Language" onclick="return updateLanguageModal(this);"><i class="fa fa-edit"></i></a>
                                                <a data-value="{{ $language->language }}" data-href="{{ URL::to('/admin/language-update/') }}" data-id ="{{ $language->id }}" class="btn btn-danger btn-sm" title="Delete Language" onclick="return deleteLanguageModal(this);"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Language</th>
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
    <div id="updateLanguage" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" id="update-language">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update Language</h4>
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
                                <label for="language">Language Name</label>
                                <input type="hidden" name="language" id="languageId"/>
                                <input type="text" class="form-control" id="languageName"
                                       placeholder="Enter Language Name">
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
    <div id="deleteLanguage" class="modal modal-danger fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" id="delete-language">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Language</h4>
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
                                <label for="language">Language Name</label>
                                <input type="hidden" name="language" id="dLanguageId"/>
                                <input type="text" class="form-control" id="dLanguageName" disabled placeholder="Enter Language Name">
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
            $('#language').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true
            });
        });

        function updateLanguageModal(context) {
            $("#languageName").val($(context).data("value"));
            $("#languageId").val($(context).data("id"));
            $("#updateLanguage").modal('show');
        }

        function deleteLanguageModal(context) {
            $("#dLanguageName").val($(context).data("value"));
            $("#dLanguageId").val($(context).data("id"));
            $("#deleteLanguage").modal('show');
        }

        $("form#update-language").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/language-update') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#languageName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input Language Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Updating..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    languageId: $("#languageId").val(),
                    languageVal: $("#languageName").val(),
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
                        $("div.errorInLogin > span").html("Language Updation Failed.");
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



        $("form#delete-language").submit(function(e){
            $.ajax({
                url: '{{ URL::to('/admin/language-delete') }}',
                type: 'POST',
                dataType: 'json',
                beforeSend: function(){
                    if($("#dLanguageName").val() == ''){
                        $("div.warningInLogin > span").html("Please Input Language Name.");
                        $("div.warningInLogin").fadeIn().fadeOut(3000);
                        return false;
                    } else {
                        $("button.btn-primary").html("Deleting..");
                        $("button.btn-primary").prop("disabled", true);
                    }
                },
                data: {
                    languageId: $("#dLanguageId").val(),
                },
                success: function (data) {
                    if (data.result == 'Success') {
                        $("div.successInLogin > span").html(data.response);
                        $("div.successInLogin").fadeIn().fadeOut(3000);
                        setTimeout(window.location.reload(), 3000);
                    } else {
                        $("div.errorInLogin > span").html("Language Deletion Failed.");
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


