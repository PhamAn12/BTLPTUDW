
<!-- Page Content -->
@extends('admin.layout.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa câu hỏi
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        
                        <form action="admin/servey/servey_sheet_edit/{{$sheet->id}}" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label>Câu Hỏi Cần Sửa</label>
                                <input class="form-control" name="txtQuestion" value="{{$sheet->question_text}}" placeholder="Please Enter ..." />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
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