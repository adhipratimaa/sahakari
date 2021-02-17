@extends('layouts.front')
@section('content')





<section class="blog-news-page inner-background all-sec-padding">
    <div class="container">
        <div class="title-wrapper service-title news-title">
            <h2>Stay Updated To Our Blog & News</h2>
            <P>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh velit excepteur duis aute irure dolor voluptate voluptatem accusa</P>
        </div>
        <div class="row">
            @foreach($notices as $notice)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="news-wrapper">
                    <a href="{{route('noticeInner',$notice->slug)}}" class="news-image">
                        <img src="{{asset('images/thumbnail/'.$notice->image)}}" alt="image">
                        <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>{{ \Carbon\Carbon::parse($notice->created_at)->format("d M, Y")}}</span>
                    </a>
                    <div class="news-content">
                        <a href="{{route('noticeInner',$notice->slug)}}"><h3>{{$notice->title}}</h3></a>
                        <p>{{$notice->short_description}}</p>
                        <a class="btn read-btn" href="{{route('noticeInner',$notice->slug)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>







@endsection