@extends('layouts.front')
@section('content')




<section class="contact-page inner-background all-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form-side">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible message">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                                {!! Session::get('message') !!}
                        </div>
                    @endif
                    <h2>Send Us Messege</h2>
                    <form action="{{route('contactUs')}}" method="POST">
                        {{csrf_field()}}
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name*" name="name" required>
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email*" name="email" required>
                        <label for="phone">Phone</label>
                        <input type="number" placeholder="Phone*" name="phone">
                        <label for="subject">Subject</label>
                        <input type="text" placeholder="Subject*" name="subject">
                        <label for="message">Messege</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Comment*"></textarea>
                        <button>Send Messege</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-address-side">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum consequatur, quae voluptatibus impedit nostrum sunt. Necessitatibus, iste asperiores. Quasi, suscipit? ipsum dolor sit amet consectetur, adipisicing elit. Eum consequatur, quae voluptatibus impedit nostrum sunt. Necessitatibus, iste asperiores. Quasi, suscipit?</p>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$setting_composer->address}}</li>
                        <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>{{$setting_composer->phone}}</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">{{$setting_composer->email}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="map-section">
            <iframe src="{{$setting_composer->office_map}}"></iframe>
        </div>
    </div>
</section>








@endsection