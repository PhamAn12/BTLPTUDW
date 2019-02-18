<!-- Page Content -->
@extends('user.layout.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Xin Chào giáo viên
                    <small>{{Auth::user()->username}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
@section('subject')
@foreach($lecturer as $l)
<li class="nav-item ">
    <a href="user/lecturers/result/{{$l->idsurvey}}" id="{{$l->id}}"> {{$l->subject_name}}
    </a>
</li>
@endforeach
@endsection