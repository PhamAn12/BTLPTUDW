<!-- Page Content -->
@extends('user.students.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @foreach($monhoc as $mh)
                        <div class="col-lg-6 panel panel-default">
                            <div class="panel-body">
                                <h4>{{$mh->tenmonhoc}}</h4>
                                <a href="sinhvien/danhgia/{{$mh->mamh}}"><button class="btn btn-primary">Đánh giá</button></a>
                            </div>
                        </div>
                        @endforeach
                        <!-- <h1 class="page-header">
                            @foreach($monhoc as $mh)
                                <p>{{$mh->tenmonhoc}}</p>
                            @endforeach
                        </h1> -->
                    </div>
                    <!-- /.col-lg-12 -->
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection