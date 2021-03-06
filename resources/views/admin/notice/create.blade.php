@extends('layouts.admin')	
@section('title','Add Notice')
@push('admin.styles')
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/datepicker3.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
@endpush
@section('content')
<section class="content-header">
	<h1>Notice<small>create</small></h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-dashboard"></i>Dashboard</a></li>
		<li><a href="">Notice</a></li>
		<li><a href="">Create</a></li>
	</ol>
</section>
<div class="content">
	@if (count($errors) > 0)
	<div class="alert alert-danger message">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      		<span aria-hidden="true">&times;</span>
    	</button>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
<form method="post" action="{{route('notice.store')}}" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="row">
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header with-heading">
					<h3 class="box-title">Add a notice</h3>
				</div>
				<div class="box-body">
					<div class="form-group">
						<label>Title(required)</label>
						<input type="text" name="title" class="form-control" value="{{old('title')}}">
					</div>
					<div class="form-group">
						<label>Slug</label>
						<input type="text" name="slug" class="form-control" value="{{old('slug')}}">
					</div>
					<div class="form-group">
						<label>Author</label>
						<input type="text" name="author" class="form-control" value="{{old('author')}}">
					</div>
					<!-- <div class="form-group">
						<label>Writer</label>
						<input type="text" name="writer" class="form-control" value="{{old('writer')}}">
					</div> -->
					<div class="form-group">
						<label>Short Description</label>
						<textarea class="form-control" name="short_description" rows="3">{{old('short_description')}}</textarea>
					</div>
					<div class="form-group">
						<label>Description(required)</label>
						<textarea class="form-control" name="description" rows="3">{{old('description')}}</textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<!-- <div class="box box-warning">
                <div class="box-header with-heading">
                    <h3 class="box-title">SEO</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                       <label>Meta Title</label>
                       <input type="text" name="meta_title" class="form-control" value="{{old('meta_title')}}">
                    </div>
                    <div class="form-group">
                       <label>Keyword</label>
                       <textarea class="form-control" name="keyword" rows="3">{{old('keyword')}}</textarea>
                    </div>
                    <div class="form-group">
                       <label>Meta Description</label>
                       <textarea class="form-control" name="meta_description" rows="3">{{old('meta_description')}}</textarea>
                    </div>
                </div>
            </div> -->
			<div class="box box-warning">
				<div class="box-header with-heading">
					<h3 class="box-title">Image</h3>
				</div>
				<div class="box-body">
					<!-- <div class="form-group">
					   <label>Upload Banner Image</label>
					   <input type="file" name="banner_image" class="form-control">
					</div> -->
					<div class="form-group">
					   <label>Upload Image</label>
					   <input type="file" name="image" class="form-control">
					</div>
				</div>
			</div>
			<div class="box box-warning">
				<div class="box-header with-heading">
					<h3 class="box-title">Publish</h3>
				</div>
				<div class="box-body">
					<div class="form-group">
						<label for="publish"><input type="checkbox" id="publish" name="publish" checked> Publish</label>
				    </div>
				    <div class="form-group">
				    	<input type="submit" name="save" value="save" class="btn btn-success">
				    </div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- datepicker -->
  <script src="{{ asset('public/admin/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <!-- CK Editor -->
  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <!-- datepicker -->
  <script>
  	// var options = {
  	//   filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
  	//   filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
  	//   filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
  	//   filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  	// };

  	// CKEDITOR.replace('description',options);
   //  CKEDITOR.config.height = 200;
   var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
    CKEDITOR.replace('description', options);
    CKEDITOR.config.height = 200;
    // CKEDITOR.config.extraPlugins = 'html5audio';
    CKEDITOR.config.colorButton_colors = 'CF5D4E,454545,FFF,CCC,DDD,CCEAEE,66AB16';
    CKEDITOR.config.colorButton_enableMore = true;
    CKEDITOR.config.floatpanel = true;
    CKEDITOR.config.panel = true;
    CKEDITOR.config.removeButtons = 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,Outdent,Indent,CreateDiv,BidiLtr,BidiRtl,Language,PageBreak,Font,Styles,Format,ShowBlocks,About';
  	$('#datepicker').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  });
    </script>
@endpush