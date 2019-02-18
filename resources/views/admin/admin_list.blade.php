<!-- Page Content -->
@extends('admin.layout.master') @section('css')
<link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css"
/> 
<style>
    .error{
        color: red;
    }
</style>
@endsection @section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->

<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-red"></i>
            <span class="caption-subject font-red sbold uppercase">ADMIN LIST</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button class="btn green" data-toggle="modal" data-target="#myModal">Thêm Mới
                            <i class="fa fa-plus"></i>
                        </button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Thông tin tài khoản</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form action="admin/admin_add" method="POST" id="form_student">
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

                            <th>Username</th>
                            <th>PassWord</th>
                            <th>Name</th>
                            <th>Email</th>
                            
                            <th>Create At</th>
                            <th>Modified At</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user_admin as $admin)

                        <tr class="odd gradeX" align="center">

                            <td>{{$admin->username}}</td>
                            <td>12345678</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            
                            <td>{{$admin->created_at}}</td>
                            <td>{{$admin->updated_at}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
        @section('script')

        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

        <script src="assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script>
        
        <script>
            $(function() {
            $('#form_student').validate({
                rules : {
                    txtUser : {
                        required : true,
                        minlength: 3
                    },
                    txtPass : {
                        required : true,
                        minlength : 8
                    },
                    txtName : {
                        required : true,
                    },
                    txtEmail : {
                        required : true,
                    }
                },
                messages : {
                    txtUser : {
                        required : "Username không được để trống",
                        minlength : "Username phải có ít nhất 3 ký tự",
                    },
                    txtPass : {
                        required : "Mật khẩu không được để trống",
                        minlength : "Mật khẩu phải có ít nhất 8 ký tự"
                    },
                    txtName : {
                        required : "Tên không được để trống"
                    },
                    txtEmail : {
                        required : "Email không được để trống"
                    }
                },
                

        });
        })
        </script>
        @endsection @endsection