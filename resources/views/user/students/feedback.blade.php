<!-- Page Content -->
@extends('user.layout.master_student')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <form action="user/students/feedback/{{$feedback[0]->idsurvey}}/{{$idstudent[0]->id}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">

                    <h3>{{$feedback[0]->subject_name}}</h3>

                    <p>1. Cơ sở vật chất</p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedback as $feed)
                            <tr>
                                <td>{{$feed->question_text}}</td>
                                <td><label><input type="radio" value='1' name="radio{{$feed->idform}}"></label></td>
                                <td><label><input type="radio" value='2' name="radio{{$feed->idform}}"></label></td>
                                <td><label><input type="radio" value='3' name="radio{{$feed->idform}}"></label></td>
                                <td><label><input type="radio" value='4'name="radio{{$feed->idform}}"></label></td>
                                <td><label><input type="radio" value='5' name="radio{{$feed->idform}}"></label></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.col-lg-12 -->

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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