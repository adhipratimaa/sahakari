@extends('layouts.front')
@section('content')




<section class="service-page all-sec-padding inner-background">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="title-wrapper service-title news-title">
                    <h2>{{$services->title}}</h2>
                    <P>{{$services->short_description}}</P>
                 </div>
                 <div class="news-detail-wrapper service-page-wrapper">
                    <img src="{{asset('images/thumbnail/'.$services->image)}}" alt="news-image">
                   
                    <div class="date-share-wrapp">
                        <span class="inner-date">{{\Carbon\Carbon::parse($services->created_at)->format("M d, Y") }}</span>
                        <ul class="share">
                            <p>Share :</p>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a class="insta" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a class="whats" href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="news-detail-content">
                        {!!$services->description!!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>







@endsection