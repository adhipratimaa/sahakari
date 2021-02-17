@extends('layouts.front')
@section('content')

<section class="blog-news-page inner-background all-sec-padding">
    <div class="container">
        <div class="title-wrapper service-title news-title">
            <h2>Files List</h2>
        </div>

        <div class="row">
        	@foreach($downloads as $download)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="news-wrapper">
                        <a href="{{asset('images/file/'.$download->cv)}}" download="true">
                        <span><i class="fa fa-file" aria-hidden="true"></i>{{$download->title}}</span><i class="fa fa-download"></i>
                        </a>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection