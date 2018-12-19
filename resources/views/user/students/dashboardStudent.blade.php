<!-- Page Content -->
@extends('user.layout.master_student')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Xin Chào Học Sinh
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

@section('sheet')
@foreach($student as $s)
<li class="nav-item ">
    <a href="user/students/feedback/{{$s->idsurvey}}/{{$idstudent[0]->id}}"> {{$s->subject_name}}
    </a>
</li>
@endforeach
@endsection