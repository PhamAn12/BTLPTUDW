<!-- Page Content -->
@extends('admin.layout.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm câu hỏi
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/servey/servey_sheet_add" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label>Câu Hỏi</label>
                                <input class="form-control" name="txtQuestion" placeholder="Please Enter Username" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Thêm Câu hỏi</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection