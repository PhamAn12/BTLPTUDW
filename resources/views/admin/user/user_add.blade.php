<!-- Page Content -->
@extends('admin.layout.master')
@section('css')
<style>
.error{
    color: #FF3300;
}
.input-group .form-control:last-child{
    width: 730px;
}
.input-group .form-control.error{
    width: 730px;
}
</style>
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">

        @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif

    @if ( Session::has('error') )
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('error') }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <div>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
</div>
@endif

<form method="POST" id="formid" action="admin/user/user_add" enctype="multipart/form-data">

    {{ csrf_field() }}
    <!-- COMPONENT START -->

    <h3>Chọn phiếu</h3>
    <div class="form-group">
        <div class="input-group input-file" name="Fichier1">
            <input type="file" name="import_file" class="form-control" placeholder='Choose a file...' />           



        </div>
    </div>
    <!-- COMPONENT END -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</form>
</div>
</div>
@endsection
@section('script')
<script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

<script src="assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script>
<script>
    $(function() {
        $('#formid').validate({
            rules : {
                import_file : {
                    required : true,
                    mimes : 'xls,xlsx'
                }
            },
            messages : {
                import_file : {
                    required : "Bạn cần nhập file",
                    mimes : "Bạn chỉ được nhập file xls hoặc xlsx"
                }
            },


        });
    })
</script>

@endsection