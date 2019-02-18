<!-- Page Content -->
@extends('user.layout.master')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				@foreach($infor as $a)
				@if ($a->img == "")
				<img src="assets/layouts/layout/img/user2.png" class="img-thumbnail" alt="Cinque Terre">
				@endif
				@if ($a->img != "")
				<img src="{{$a->img}}" class="img-thumbnail" >
				@endif
				@endforeach
			</div>
			<div class="col-lg-9">
				@foreach($infor as $a)
				<table class="col-lg-12 table table-hover">
					<tr>
						<td>Họ và tên</td>
						<td>{{$a->name}}</td>
					</tr>
					<tr>
						<td>Tên đăng nhập</td>
						<td>{{$a->user_id}}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>{{$a->email}}</td>
					</tr>
					<tr>
						<td>Địa chỉ</td>
						<td>{{$a->diachi}}</td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td>{{$a->sdt}}</td>
					</tr>
				</table>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Cập nhật</button>
				<div class="modal" id="myModal">
					<div class="modal-dialog">
						<form method="post" action="{{ URL::to('user/lecturers/update') }}" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Thông tin cá nhân</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="usr">Họ và tên:</label>
										<input type="text" class="form-control" id="name" name="name" value="{{$a->name}}">
									</div>
									<div class="form-group">
										<label for="usr">Email:</label>
										<input type="text" class="form-control" id="email" name="email" value="{{$a->email}}">
									</div>
									<div class="form-group">
										<label for="usr">Số điện thoại:</label>
										<input type="text" class="form-control" id="phone" name="phone" value="{{$a->sdt}}">
									</div>
									<div class="form-group">
										<label for="usr">Địa chỉ:</label>
										<input type="text" class="form-control" id="address" name="address" value="{{$a->diachi}}">
									</div>
									<div class="form-group">
										<label>Ảnh đại diện</label>
										<input type="file" name="file_img">
									</div>
									<div class="form-group" id="error">

									</div>
								</div>
								<!-- Modal footer -->
								<div class="modal-footer">
									<button class="btn btn-primary" id="luu">Lưu</button>
								</div>
							</div>
						</form>
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
@section('subject')
@foreach($lecturer as $l)
<li class="nav-item ">
	<a href="user/lecturers/result/{{$l->id}}" id="{{$l->id}}"> {{$l->subject_name}}
	</a>
</li>
@endforeach
@endsection

<style type="text/css">
.error{
	color: red;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
<script type="text/javascript">
	$(document).ready(function(){
		$('form').on('submit', function(e){
			var name = $('#name').val();
			var email = $('#email').val();
			var phone = $('#phone').val();
			var address = $('#address').val();
			if(name == "" || email == "" || phone == "" || address == ""){
				e.preventDefault();
				$('#error').addClass('error');
				$('#error').text('bạn cần điền đủ thông tin');
			}
		});

	});
</script>