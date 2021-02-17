@extends('layouts.front')
@section('content')




<section class="gallery-detail-page inner-background all-sec-padding">
    <div class="container">
        <div class="row">
            @foreach($galleries->images->chunk(4) as $image)
            @foreach($image as $img)

            <div class="col-lg-3 col-md-4 col-6 p-0">
                <a class="gal-detail-link" href="{{asset('images/'.$img->filename)}}"><img src="{{asset('images/thumbnail/'.$img->filename)}}"></a>
                
            </div>
            @endforeach
            @endforeach

           
        </div>
    </div>
</section>






@endsection