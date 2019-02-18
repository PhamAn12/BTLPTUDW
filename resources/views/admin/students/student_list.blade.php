<!-- Page Content -->
@extends('admin.layout.master') @section('css')
<link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css"


/>
<style>
.error{
    color: #FF3300;
}
</style>
 @endsection @section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->

<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-red"></i>
            <span class="caption-subject font-red sbold uppercase">STUDENT LIST</span>
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

                                        <form action="admin/student/student_addone" method="POST" id="form_student">
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
                                                <label>Course</label>
                                                <input type="text" class="form-control" name="txtCourse" placeholder="Please Enter .." />
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

                    <th>Username</th>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Create At</th>
                    <th>Modified At</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user_student as $student)

                <tr class="odd gradeX" align="center">

                    <td>{{$student->username}}</td>
                    
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->course}}</td>
                    <td>{{$student->created_at}}</td>
                    <td>{{$student->modified_at}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw" ></i><a href="admin/student/xoa/{{$student->username}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/student/student_edit/{{$student->id}}">Edit</a></td>
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
                txtCourse : {
                    required :true,
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
                txtCourse : {
                    required : "Course không được để trống"
                }
                
            },


        });
    })
</script>

@endsection @endsection