<!-- Page Content -->
@extends('user.students.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="">
                            @foreach($mh as $a)
                                <h3>{{$a->tenmonhoc}}</h3>
                            @endforeach
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên tiêu chí</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>teiu chi 1</td>
                                        <td><input type="radio" name="1"></td>
                                        <td><input type="radio" name="1"></td>
                                        <td><input type="radio" name="1"></td>
                                        <td><input type="radio" name="1"></td>
                                        <td><input type="radio" name="1"></td>
                                    </tr>
                                    <tr>
                                        <td>teiu chi 1</td>
                                        <td><input type="radio" name="2"></td>
                                        <td><input type="radio" name="2"></td>
                                        <td><input type="radio" name="2"></td>
                                        <td><input type="radio" name="2"></td>
                                        <td><input type="radio" name="2"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <button class="btn btn-primary">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection