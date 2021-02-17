@extends('layouts.front')
@section('content')





<section class="news-detail-page inner-background all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="news-detail-wrapper">
                    <div class="title-wrapper service-title news-title news-detail-title">
                        <h2>{{$reports->title}}</h2>
                    </div>
                    <img src="{{asset('images/thumbnail/'.$reports->image)}}" alt="news-image">
                    <div class="date-share-wrapp">
                        <span class="inner-date">{{ \Carbon\Carbon::parse($reports->created_at)->format("d M, Y")}}</span>
                        <ul class="share">
                            <p>Share :</p>
                            <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                            <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a class="insta" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a class="whats" href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="news-detail-content">
                       {!!$reports->description!!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="news-sidebar">
                    <h2>Related News & Blog</h2>
                    <ul>
                        @foreach($recentReports as $recent)
                        <li><a href="{{route('reportsInner',$recent->slug)}}"><h3>{{$recent->title}}</h3></a></li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection