@extends('layouts.front')
@section('content')




<section class="about-page inner-background all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content-side">
                    <div class="title-wrapper">
                        <h2>{{$page->short_description}}</h2>
                    </div>
                   {!!$page->description!!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image-side">
                    <img src="{{asset('images/thumbnail/'.$page->image)}}" alt="about-image">
                </div>
            </div>
        </div>
    </div>
</section>





@endsection