@extends('layouts.admin') 
@section('title','Dashboard')
@push('admin.styles')
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/datepicker3.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
<!-- bootstrap wysihtml5 - text editor -->
@endpush
@section('content')

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
<form method="post" action="{{route('setting.update',@$detail->id)}}" enctype="multipart/form-data">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="PUT">
  <div class="row">
    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header with-heading">
          <h3 class="box-title">Social Media</h3>
        </div>
        <div class="box-body">
          <div class="form-group">
            <label>Facebook</label>
            <input type="text" name="facebook" class="form-control" value="{{@$detail->facebook}}">
          </div>
           <div class="form-group">
            <label>Twitter</label>
            <input type="text" name="twitter" class="form-control" value="{{@$detail->twitter}}">
          </div>
           <div class="form-group">
            <label>LinkedIn</label>
            <input type="text" name="linkedin" class="form-control" value="{{@$detail->linkedin}}">
          </div>
           <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{@$detail->email}}">
          </div>
          <div class="form-group">
            <label>Cell</label>
            <input type="number" name="cell" class="form-control" value="{{@$detail->cell}}">
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{@$detail->phone}}">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{@$detail->address}}">
          </div>
           <div class="form-group">
            <label>Youtube</label>
            <input type="text" name="youtube" class="form-control" value="{{@$detail->youtube}}">
          </div>
          <div class="form-group">
            <label>Office Map</label>
            <textarea class="form-control" name="office_map" class="form-control">{{@$detail->office_map}}</textarea>
          </div>
          
        </div>
      </div>
      
    </div>

    <div class="col-md-4">
       <div class="box box-warning">
            <div class="box-header with-heading">
              <h3 class="box-title">Image</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Logo</label>
                <input type="file" name="logo" class="form-control">
               @if($detail->logo)
               <img src="{{asset('images/thumbnail/'.@$detail->logo)}}" width="80px" height="80px">
               @endif
              </div>
              <div class="form-group">
                <label>Fav Icon</label>
                <input type="file" name="fav_icon" class="form-control">
               @if(@$detail->fav_icon)
               <img src="{{asset('images/thumbnail/'.@$detail->fav_icon)}}" width="80px" height="80px">
               @endif
              </div>
              <div class="form-group">
                <label>Footer Logo</label>
                <input type="file" name="footer_logo" class="form-control">
               @if(@$detail->footer_logo)
               <img src="{{asset('images/thumbnail/'.@$detail->footer_logo)}}" width="80px" height="80px">
               @endif
              </div>
            </div>
          </div>  
     
        <div class="box box-warning">
        <div class="box-header with-heading">
          <h3 class="box-title">Image</h3>
        </div>
        <div class="box-body">
          <div class="form-group">
             <label>Upload Banner Image</label>
             <input type="file" name="banner_image" class="form-control">
             @if($detail->banner_image)
             <img src="{{asset('images/main/'.$detail->banner_image)}}" width="100" height="100">
             @endif
          </div>
        </div>

      
      </div>
    
     
      <div class="box box-warning">
        <div class="box-header with-heading">
          <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
         <!--  <div class="form-group">
            <label for="publish"><input type="checkbox" id="publish" name="publish"  checked> Publish</label>
          </div> -->
            <div class="form-group">
              <input type="submit" name="save" value="save" class="btn btn-success">
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
  <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('js/accessible_character_countdown.js') }}"></script>
  <!-- datepicker -->
  <script src="{{ asset('backend/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <!-- CK Editor -->
  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <!-- datepicker -->
  <script>
    CKEDITOR.replace('description');
    CKEDITOR.config.height = 200;
    $(document).ready(function () {
        $( "#input-field-demo" ).accessibleCharCount()
     });
    
    </script>
  
@endpush

