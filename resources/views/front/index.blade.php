@extends('layouts.front')
@section('content')

<!-- main banner section starts -->

<section class="main-banner">
    <div class="banner-slider">
        
        @foreach($sliders as $slider)
        <div class="banner-slider-container">
            <figure style="background-image:url('{{asset('images/size/'.@$slider->image)}}')">
                <div class="container">
                    <div class="banner-content">
                        <h1 class="heading">{{$slider->title}}</h1>

                        <a class="btn all-btn" href="#">Contact </a>
                    </div>
                </div>
            </figure>
        </div>
        @endforeach
       
    </div>
</section>

<!-- main banner section ends -->

<!-- about section starts -->

<section class="about-section all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content-side">
                    <div class="title-wrapper">
                        <h2>{{$pages->title}}</h2>
                    </div>
                   {!!$pages->description!!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image-side">
                    <img src="{{asset('images/thumbnail/'.$pages->image)}}" alt="about-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about section ends -->

<!-- service section starts -->
   
<section class="service-section all-sec-padding">
    <div class="container">
        <div class="title-wrapper service-title">
            <h2>Our Services</h2>
            <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh velit
                excepteur duis aute irure dolor voluptate voluptatem accusa</p>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 col-12 service-container">
                <div class="service-col">
                    <div class="service-icon">
                        <img src="{{asset('images/thumbnail/'.$service->image)}}" alt="money-icon">
                    </div>
                    <div class="service-content">
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->short_description}}</p>
                        <a class="read-btn btn" href="{{route('serviceInner',$service->slug)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>

<!-- services section ends -->

<!-- news section starts -->

<section class="news-section all-sec-padding">
    <div class="container">
        <div class="title-wrapper service-title news-title">
            <h2>Stay Updated To Our Blog & News</h2>
            <P>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh velit excepteur duis aute irure dolor voluptate voluptatem accusa</P>
        </div>
        <div class="row">
            @foreach($news as $new)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="news-wrapper">
                    <a href="{{route('newsInner',$new->slug)}}" class="news-image">
                        <img src="{{asset('images/thumbnail/'.$new->image)}}" alt="image">
                        <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>{{ \Carbon\Carbon::parse($new->created_at)->format("d M, Y")}}</span>
                    </a>
                    <div class="news-content">
                        <h3>{{$new->title}}</h3>
                        <p>{{$new->short_description}}</p>
                        <a class="btn read-btn" href="{{route('newsInner',$new->slug)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- news section ends -->

<!-- scheme section starts -->

<section class="scheme-section all-sec-padding" style="background-image:url('{{asset('front/images/background-image3.jpg')}}')">
    <div class="container">
        <div class="title-wrapper service-title">
            <h2>Bajrayogini Scheme</h2>
            <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh velit excepteur duis aute irure dolor voluptate voluptatem accusa</p>
        </div>
        <div class="row">
            @foreach($schemes as $scheme)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="scheme-wrapper">
                    <div class="scheme-image"><img src="{{asset('images/thumbnail/'.$scheme->image)}}" alt="image"></div>
                    <div class="scheme-content">
                        <h3>{{$scheme->title}}</h3>
                        {{$scheme->short_description}}
                        <a href="{{route('schemeInner',$scheme->slug)}}" class="btn scheme-btn read-btn"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>

<!-- scheme section ends -->

<!-- member section starts -->

<section class="member-section all-sec-padding">
    <div class="container">
        <div class="title-wrapper service-title news-title">
            <h2>Our Members</h2>
            <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh velit excepteur duis aute irure dolor voluptate voluptatem accusa</p>
        </div>
        <div class="member-slider">
            @foreach($members as $member)
            <div class="member-container">
                <a href="#" class="member-image"><img src="{{asset('images/thumbnail/'.$member->image)}}" alt="image"></a>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- member section ends -->

@endsection