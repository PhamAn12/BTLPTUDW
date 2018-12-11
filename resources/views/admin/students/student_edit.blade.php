<!-- Page Content -->
@extends('admin.layout.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                        <div class = "alert alert-danger">
                            @foreach($errors -> all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                        @endif

                        @if(session('thongbao'))
                        <div class = "alert alert-success">
                            {{session('thongbao')}}
                        </div>    
                        @endif
                        <form action="admin/student/student_edit/{{$user_students->id}}" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="txtUser" value='{{$user_students->user_id}}' disabled />
                            </div>
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input type="text" class="form-control" value='{{$user_students->name}}'
                                        name="txtName" placeholder="Please Enter RePassword" />
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

@endsection