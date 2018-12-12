<!-- Page Content -->
@extends('user.lecturers.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                            @foreach($monday as $mh)
                            <div class="col-lg-6 panel panel-default">
                                <div class="panel-body">
                                    <h4>{{$mh->tenmonhoc}}</h4>
                                    <a href=""><button class="btn btn-primary">Chi tiết</button></a>
                                </div> 
                            </div>
                            @endforeach
                    </div>
                    <!-- /.col-lg-12 -->
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection