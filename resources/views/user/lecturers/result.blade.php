<!-- Page Content -->
@extends('user.layout.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center" class="caption-subject uppercase">Kết quả đánh giá của người học về học phần</h2>
                        <h2 align="center" >{{$subject[0]->hocky}} </h2>
                        <p>Tên học phần: {{$subject[0]->subject_name}} <br>
                        Tên giảng viên: {{$subject[0]->name}} <br>
                        
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    
                                    <th>Tiêu chí</th>
                                    <th>M</th>
                                    <th>STD</th>
                                    <th>M1</th>
                                    <th>STD1</th>
                                    <th>M2</th>
                                    <th>STD2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($result as $r)
                                <tr>
                                    
                                    <td>{{$r->question_text}}</td>
                                    <td>{{$r->M}}</td>
                                    <td>{{$r->STD}}</td>
                                    <td>{{$r->M1}}</td>
                                    <td>{{$r->STD1}}</td>
                                    <td>{{$r->M2}}</td>
                                    <td>{{$r->STD2}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p><strong>Ghi chú :</strong></p>
                        <p>-M: giá trị trung bình của các tiêu chí theo lớp học phần</p>
                        <p>-STD: độ lệch chuẩn của các tiêu chí theo lớp học phần</p>
                        <p>-M1: giá trị trung bình các tiêu chí dựa trên dữ liệu phản hồi</p>
                        <p>-STD1: độ lệch chuẩn của các tiêu chí dựa trên ý kiến phản hồi của sinh viên</p>
                        <p>-M2: giá trị trung bình các tiêu chí dựa trên dữ liệu phản hồi</p>
                        <p>-STD2: độ lệch chuẩn của các tiêu chí dựa trên ý kiến phản hồi của sinh viên</p>
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