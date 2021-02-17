@extends('layouts.front')
@section('content')





<section class="scheme-page all-sec-padding inner-background">
    <div class="container">
        <div class="title-wrapper service-title news-title news-detail-title">
            <h2>{{$schemes->title}}</h2>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="scheme-detail-wrapper">
                    <p>{{$schemes->short_description}}</p>
                        {!!$schemes->description!!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="news-sidebar scheme-sidebar">
                    <h2>Bajrayogini Schemes</h2>
                    <ul>
                        @foreach($recentSchemes as $scheme)
                            <li><a href="{{route('schemeInner',$scheme->slug)}}"><h3>{{$scheme->title}}</h3></a></li>
                        @endforeach
                    </ul>
                  
                </div>
            </div>
        </div>
    </div>
</section>








@endsection
