<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahakari</title>
     <link rel="icon" href="{{asset('images/thumbnail/'.$setting_composer->fav_icon)}}" type="image/gif">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}"
    >
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

</head>
<body>


<header id="header">
    <div class="top-head">
        <div class="container">
            <div class="top-header">
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>{{$setting_composer->address}}</p>
                <ul class="top-social-media">
                    <li><a href="{{$setting_composer->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{$setting_composer->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="{{$setting_composer->youtube}}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="{{$setting_composer->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true" target="_blank"></i></a></li>
                    <li><a href="{{$setting_composer->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="middle-head">
        <div class="container">
            <div class="mid-header">
                <a href="index.php" class="logo"><img src="{{asset('front/images/logo.png')}}" alt="logo"> </a>
                <ul class="mid-info">
                    <li><img src="{{asset('front/images/phone.svg')}}" alt="image">
                        <div class="phone">
                            <span>Free Call To Us:</span>
                            <p><a href="tel:{{$setting_composer->phone}}">{{$setting_composer->phone}}</a></p>
                        </div>
                    </li>
                    <li><img src="{{asset('front/images/clock.svg')}}" alt="image">
                        <div class="phone">
                            <span>Open Time:</span>
                            <p>Sun-Fri(10am-5pm)</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-head">
        <div class="container">
            <div class="top-menu-bar">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
            </div>
            <nav class="main-nav">
                <span class="close-btn">X</span>
              <div class="nav-inner">
                    <a href="index.php" class="small-device-logo"><img src="{{asset('front/images/bajra logo.jpg')}}" alt="logo"></a>
                    <ul>
                        <a href="#" class="sticky-logo"><img src="images/logo.png" alt="logo"></a>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('page',['about-us'])}}">About Us</a></li>
                        <li><a href="">Bajrayogini Scheme <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="sub-menu" id="sub-menu">
                              
                                @foreach($view_scheme as $scheme)

                                <li><a href="{{route('schemeInner',$scheme->slug)}}">{{$scheme->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="sub-menu" id="sub-menu">
                                @foreach($view_service as $service)

                                <li><a href="{{route('serviceInner',$service->slug)}}">{{$service->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('allGalleries')}}">Gallery</a></li>
                        <li><a href="{{route('allNews')}}">News</a></li>
                        <li><a href="{{route('allReports')}}">Reports</a></li>
                        <li><a href="{{route('allNotices')}}">Notice</a></li>
                        <li><a href="{{route('downloads')}}">Download</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<div class="header-push"></div>
<!-- header section ends -->

@yield('content')

<!-- footer section starts -->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
               <div class="footer-col-wrapper">
                    <a href="/" class="footer-logo"><img src="images/bajra logo.jpg" alt=""></a>
                    <p> suscipit! Molestias velit atque beatae excepturi expedita sit voluptatem eligendi delectus necessitatibus dolor? Recusandae quibusdam perferendis, reprehenderit neque itaque earum reiciendis?</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <div class="footer-col-wrapper">
                    <h3>Quick Link</h3>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('page',['about-us'])}}">About Us</a></li>
                        <li><a href="{{route('allGalleries')}}">Gallery</a></li>
                        <li><a href="{{route('allNews')}}">News</a></li>
                        <li><a href="{{route('downloads')}}">Downloads</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-col-wrapper">
                    <h3>Contact Us</h3>
                    <ul class="footer-contact">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$setting_composer->address}}</li>
                        <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>{{$setting_composer->phone}}</li>
                        <li><a href="mailto: {{$setting_composer->email}}"><i class="fa fa-envelope" aria-hidden="true"></i>{{$setting_composer->email}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-col-wrapper">
                    <h3>Follow Us</h3>
                    <ul class="top-social-media footer-social">
                        <li><a href="{{$setting_composer->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{$setting_composer->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{$setting_composer->youtube}}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="{{$setting_composer->linkedin}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="{{$setting_composer->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- footer section ends -->




    <script src="{{asset('front/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/slick.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('front/js/custom.js')}}"></script>
 @stack('front_scripts')
    
</body>
</html>