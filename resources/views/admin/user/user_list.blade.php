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
            <span class="caption-subject font-red sbold uppercase">LECTURER LIST</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button class="btn green" data-toggle="modal" data-target="#myModal">Add new
                            <i class="fa fa-plus"></i>
                        </button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Thêm sinh viên</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form action="admin/user/user_addone" method="POST">
                                            {{ csrf_field()}}
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" name="txtUser" placeholder="Please Enter Username" />
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
                                            </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="txtName" placeholder="Please Enter Name" />
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" />
                                            </div>
                                            <div class="form-group">
                                                <label>Mã GV</label>
                                                <input type="text" class="form-control" name="txtMagv" placeholder="Please Enter .." />
                                            </div>
                                            <button type="submit" class="btn btn-default">User Add</button>
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
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors -> all() as $err) {{$err}}
                    <br> @endforeach
                </div>
                @endif @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr align="center">
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>PassWord</th>
                            <th>Lecture Code</th>
                            <th>Create At</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user_lecturer as $a)
                        <tr class="odd gradeX">
                            <td>{{$a->name}}</td>
                            <td>{{$a->username}}</td>
                            <td>{{$a->email}}</td>
                            <td>12345678</td>
                            <td>{{$a->magv}}</td>
                            <td>{{$a->created_at}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$a->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/user_edit/{{$a->id}}">Edit</a></td>
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
            $(".deleteSheetQuestion").click(function () {
                var id = $(this).data("id");
                var token = $(this).data("token");
                $.ajax(
                {
                    url: "admin/servey/delete/" + id,
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_method": 'DELETE',
                        "_token": token,
                    },
                    success: function () {
                        console.log("it Work");
                    }
                });

                console.log("It failed");
            });
        </script> @endsection @endsection