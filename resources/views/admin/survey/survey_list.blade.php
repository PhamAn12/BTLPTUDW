<!-- Page Content -->
@extends('admin.layout.master') @section('css')
<link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css"
/> @endsection @section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->

<div class="portlet light portlet-fit bordered">
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-settings font-red"></i>
			<span class="caption-subject font-red sbold uppercase">SURVEY LIST</span>
		</div>
	</div>
	<div class="portlet-body">
		<div class="table-toolbar">
			<div class="row">
				<div class="col-md-6">
					<div class="btn-group">
						<button class="btn green" data-toggle="modal" data-target="#myModal">Add new
							<i class="fa fa-plus"></i>
						</button>
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Modal Header</h4>
									</div>
									<div class="modal-body">

										<form action="{{ URL::to('admin/survey/survey_add') }}" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
											<div class="form-group">
												<label>Tên môn học</label>
												<input class="form-control" name="txtSubject" placeholder="Please Enter subject" />

											</div>
											<div class="form-group">
												<label>Mã giảng viên</label>
												<input class="form-control" name="txtmgv" placeholder="Please Enter magv" />
											</div>
											<div class="form-group">
												<label>Danh sách sinh viên</label>
												<div>
													
													<input type="file" name="import_file" />	
												</div>
											</div>
											<button type="submit" class="btn btn-default">Thêm</button>
											<button type="reset" class="btn btn-default">Reset</button>
											<form>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>

							<th> Tên cuộc khảo sát </th>
							<th> Created at</th>
							<th> Modefied at</th>
							<th> Responses</th>
							<th> Edit </th>
							<th> Delete </th>
						</tr>
					</thead>
					<tbody>
						@foreach($survey_list as $list)
						<tr class="odd gradeX">
							<td>{{$list->name}}</td>
							<td>{{$list->created_at}}</td>
							<td>{{$list->updated_at}}</td>
							<td><a href="#">3 response</a></td>
							<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Delete</a></td>
							<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
		@section('script')

		<script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
		<script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
		<script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

		<script src="assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script> 
		<script>
			$(".deleteSheetQuestion").click(function(){
				var id = $(this).data("id");
				var token = $(this).data("token");
				$.ajax(
				{
					url: "admin/servey/delete/"+id,
					type: 'DELETE',
					dataType: "JSON",
					data: {
						"id": id,
						"_method": 'DELETE',
						"_token": token,
					},
					success: function ()
					{
						console.log("it Work");
					}
				});

				console.log("It failed");
			});
		</script>
		@endsection @endsection