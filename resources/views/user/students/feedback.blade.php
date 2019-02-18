<!-- Page Content -->
@extends('user.layout.master_student')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <form action="user/students/feedback/{{$feedback[0]->idsurvey}}/{{$idstudent[0]->id}}" method="POST" id="formABC">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">

                    <h3 align="center">{{$feedback[0]->subject_name}} - {{$feedback[0]->code_subject}}</h3>
                    @foreach($group as $gr)
                    <p><strong>(*) {{$gr->group_name}}</strong></p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="800px"></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($feedback as $feed)
                            @if($feed->idgroupname == $gr->id)
                            <tr>
                                <td>{{$feed->question_text}}</td>
                                <td><label><input type="radio" value='1' name="radio{{$feed->idform}}"></label></td>
                                <td><label><input type="radio" value='2' name="radio{{$feed->idform}}"></label></td>
                                <td><label><input type="radio" value='3' name="radio{{$feed->idform}}"></label></td>
                                <td><label><input type="radio" value='4'name="radio{{$feed->idform}}"></label></td>
                                <td><label><input type="radio" value='5' name="radio{{$feed->idform}}"></label></td>
                            </tr>
                            @endif
                            @endforeach

                        </tbody>
                    </table>                       
                    @endforeach

                    

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->

            </div>
            <button id="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
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

@section('script')
<script>
    $(document).ready(function () {

        $("#formABC").submit(function (e) {

            //stop submitting the form to see the disabled button effect
            

            //disable the submit button
            $("#btnSubmit").attr("disabled", true);

            //disable a normal button
            $("#btnTest").attr("disabled", true);

            return true;

        });
    });
</script>
@endsection