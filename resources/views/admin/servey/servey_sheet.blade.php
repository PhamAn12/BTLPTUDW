<!-- Page Content -->
@extends('admin.layout.master') @section('css')
<link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css"
/> @endsection @section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->

<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-red"></i>
            <span class="caption-subject font-red sbold uppercase">SURVEY SHEET</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button class="btn green" data-toggle="modal" data-target="#myModal2">Chọn version
                            <i class="fa fa-plus"></i>
                        </button>
                        

                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">

                                    <div class="modal-body">

                                        <form id="form2" action="admin/servey/servey_sheet_version"method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Chọn version phiếu</label>
                                                <select class="form-control" name="ver2" id="ver1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> <br>

                                            </div>

                                            <button id="ajaxSubmit2" type="submit" class="btn btn-default">Chọn</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                            <form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr>
                            <th> Version</th>
                            <th> Câu hỏi </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sheet as $s)
                        <tr>
                            <td>{{$s->version}}</td>
                            <td>{{$s->question_text}} </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
        @section('script')

        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>

        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

        <script src="assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script> 
        <script>
            $(".deleteSheetQuestion").click(function(){
                alert('abcabc');
            });
        </script>

        <!-- <script>
            jQuery(document).ready(function(){
                jQuery('#ajaxSubmit').click(function(e){
                    e.preventDefault();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: "{{ url('/admin/servey/servey_sheet_add') }}",
                        method: 'post',
                        data: {
                            sel1: jQuery('#sel1').val(),
                            question: jQuery('#question').val(),
                        },

                        success: function(result){
                            jQuery('.alert').show();
                            jQuery('.alert').html(result.success);
                        }});

                });
            });
        </script> -->
        @endsection @endsection