<!-- Page Content -->
@extends('admin.layout.master') @section('css')
<link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css"
/> 
<style>
.error{
    color: #FF3300;
}
</style>@endsection @section('content')
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

                                        <form id="form_student" action="admin/user/user_addone" method="POST">
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
                @if ( Session::has('success') )
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>{{ Session::get('success') }}</strong>
            </div>
            @endif

            @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>{{ Session::get('error') }}</strong>
            </div>
            @endif

            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <div>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
        @endif
        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
            <thead>
                <tr align="center">
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>

                    <th>Lecture Code</th>
                    <th>Create At</th>
                    <th>Modified At</th>
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

                    <td>{{$a->magv}}</td>
                    <td>{{$a->created_at}}</td>
                    <td>{{$a->modified_at}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$a->username}}" onclick="return confirm('Bạn thực sự muốn xóa không?');"> Delete</a></td>
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
                    required :true,
                },
                txtMagv :{
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
                txtName :{
                    required : "Tên không được để trống"
                },
                txtEmail : {
                    required : "Email không được để trống"
                },
                txtMagv : {
                    required :" Mã giảng viên không được để trống"
                }

                
            },


        });
    })
</script>

@endsection @endsection