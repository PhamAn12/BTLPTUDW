<!-- Page Content -->
@extends('user.lecturers.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Kết quả học phần người học về học phần</h2>
                        <h2>Học kỳ </h2>
                        <p>Ten hoc phần:</p>
                        <p>Tên giảng viên:</p>
                        <p>Số lượng sinh viên đánh giá</p>
                        <p>Số lượng giảng viên tham gia dạy môn học </p>
                        <p>Số lượng môn học giảng viên tham gia giảng dạy</p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu chí</th>
                                    <th>M</th>
                                    <th>STD</th>
                                    <th>M1</th>
                                    <th>STD1</th>
                                    <th>M2</th>
                                    <th>STD2</th>
                                </tr>
                            </thead>
                        </table>
                        <p>Ghi chú</p>
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