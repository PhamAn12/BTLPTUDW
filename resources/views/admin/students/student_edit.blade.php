<!-- Page Content -->
@extends('admin.layout.master')
@section('css')
<style>
.error{
    color: #FF3300;
}
</style>
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">

        <div class="col-lg-12">
            <h1 class="page-header">Học Sinh 
                <small>Edit</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12" style="padding-bottom:120px">
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
    <form id="form_edit" action="admin/student/student_edit/{{$user_students->id}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" value='{{$user_students->user_id}}' disabled />
        </div>
        <div class="form-group">
            <label>Họ tên</label>
            <input type="text" class="form-control" value='{{$user_students->name}}'
            name="txtName" placeholder="Please Enter name" />
        </div>
        <div class="form-group">
            <label>Email VNU</label>
            <input type="email" class="form-control" name="txtEmail" value='{{$user_students->email}}'
            placeholder="Please Enter Email" />
        </div>
        <div class="form-group">
            <label>Course</label>
            <input type="text" class="form-control" name="txtCourse" value='{{$user_students->course}}'
            placeholder="Please Enter Email" />
        </div>
        <button type="submit" class="btn btn-default">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
        <form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

</div>
</div>
@endsection
@section('script')

<script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

<script src="assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script>

<script>
    $(function() {
        $('#form_edit').validate({
            rules : {
                txtUser : {
                    required : true,
                    minlength: 3
                },
                txtName : {
                    required : true,    
                },
                txtEmail : {
                    required : true,
                    email:true
                },
                txtCourse :{
                    required : true,

                }
            },
            messages : {
                txtUser : {
                    required : "Username không được để trống",
                    minlength : "Username phải có ít nhất 3 ký tự",
                },
                txtName : {
                    required : "Họ tên không được để trống",

                },
                txtEmail :{
                    required : "Email không được để trống",
                    email:"Bạn cần nhập email đúng định dạng"
                },
                txtCourse : {
                    required : "Course không được để trống"
                }
            },


        });
    })
</script>
@endsection