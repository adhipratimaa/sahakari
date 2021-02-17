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
<section class="content-header">
  <h1>Dashboard<small></small></h1>
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {!! Session::get('message') !!}
    </div>
    @endif
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

    
  
</section>
<div class="content">
  <div class="col-md-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        
        <h3>{{count($services)}}</h3>

        <p>Services</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="{{route('service.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

   <div class="col-md-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        
        <h3>{{count($reports)}}</h3>

        <p>Reports</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="{{route('report.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

   <div class="col-md-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-fuchsia">
      <div class="inner">
        
        <h3>{{count($notices)}}</h3>

        <p>Notices</p>
      </div>
      <div class="icon">
        <i class="ion-android-arrow-dropright-circle"></i>
      </div>
      <a href="{{route('notice.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">News</h3>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Title</th>
                  <th>Image</th>
                </tr>
              </thead>
              <tbody>
                @php($i=1)
                @foreach($news as $new)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$new->title}}</td>
                  <td>@if($new->image)
                <img src="{{asset('images/listing/'.$new->image)}}">
                @else
                <p>N/A</p>
                @endif
                    </td>
                
                  
                  
                </tr>
                  @php($i++)
                  @endforeach

              </tbody>

            </table>
            <a href="{{route('news.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            
          </div>
        </div>
      </div>
    </div>
  
 
  
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
    CKEDITOR.replace('donation_detail');
    CKEDITOR.config.height = 200;
    $(document).ready(function () {
        $( "#input-field-demo" ).accessibleCharCount()
     });
    
    </script>
@endpush