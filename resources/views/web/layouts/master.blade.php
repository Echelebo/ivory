@php
    use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Dec 2024 10:10:14 GMT -->
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if(isset($setting))
    <!-- App Title -->
    <title>{{ $page_title }} | {{ $setting->title }}</title>

    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/uploads/setting/'.$setting->favicon_path) }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/uploads/setting/'.$setting->favicon_path) }}" type="image/x-icon">

    @yield('top_meta_tags')
    @endif

    @if(empty($setting))
    <!-- App Title -->
    <title>@yield('title')</title>
    @endif

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @if($livechat->status == 1)
    <link href="{{ asset('web/css/floating-wpp.min.css') }}" rel="stylesheet">
    @endif



</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-book">
            <div class="loader-book-page"></div>
            <div class="loader-book-page"></div>
            <div class="loader-book-page"></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <header class="header">
        <!-- header top -->

        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="{{ $social->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>

                            <a href="https://wa.me/{{ str_replace(' ', '', $social->whatsapp) }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            @if(isset($social->youtube))
                            <a href="{{ $social->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-contact">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-location-dot"></i>{{ $setting->contact_address }}</a>
                                </li>
                                <li>
                            <a href="mailto: {{ $setting->email_one }}"><i class="far fa-envelopes"></i> <span class="__cf_email__" data-cfemail="30595e565f705548515d405c551e535f5d">{{ $setting->email_one }}</span></a>
                                </li>
                                <li>
                            <a href="tel:{{ $setting->phone_one }}"><i class="far fa-phone-volume"></i>{{ $setting->phone_one }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('/uploads/setting/'.$setting->logo_path) }}" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i
                                    class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-x active" href="/" data-bs-toggle="dropdown-x">Home</a>

                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item mega-menu dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('services') }}" data-bs-toggle="dropdown">Our Services</a>
                                <div class="dropdown-menu fade-down">
                                    <div class="mega-content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>About Us</h5>
                                                    <div class="menu-about">
                                                        <a href="/" class="menu-about-logo"><img
                                                                src="{{ asset('/uploads/setting/'.$setting->logo_path) }}" alt=""></a>
                                                        <p>{!! strip_tags($setting->motto_text, '<p><a><b><i><u><strong>') !!}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>Our Programs</h5>
                                                    <ul class="mega-menu-item">
                                                        @foreach($service_subnavs as $service_subnav)
                                                        @if ($service_subnav->id < 6)
                                                        <li><a class="dropdown-item" href="{{ route('service.single', $service_subnav->slug) }}">{{ $service_subnav->title }}</a></li>
                                                        @endif

                                                        @endforeach

                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>More Programs</h5>
                                                    <ul class="mega-menu-item">
                                                        @foreach($service_subnavs as $service_subnav)
                                                        @if ($service_subnav->id > 5)
                                                        <li><a class="dropdown-item" href="{{ route('service.single', $service_subnav->slug) }}">{{ $service_subnav->title }}</a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <h5>Free Resources</h5>
                                                    <ul class="mega-menu-item">
                                                        @foreach($workprogress as $workprogres)
                                                        <li><a class="dropdown-item" href="{{ $workprogres->link }}" target="_blank">{{ $workprogres->title }}</a></li>
                                                        @endforeach
                                                        <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item mega-menu dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Study Centers</a>
                                <div class="dropdown-menu fade-down">
                                    <div class="mega-content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                @foreach($faqs as $faq)
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <h5>{{ $faq->title }}</h5>
                                                    <div class="menu-about">
                                                        {!! $faq->description !!}
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('career') }}">Career</a></li>


                          <!--  <li class="nav-item ">
                                <a class="nav-link dropdown-toggle-x" href="/blog" data-bs-toggle="dropdown-x">Our Blog</a>

                            </li> -->
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                       <!-- <div class="nav-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link search-box-outer"><i
                                        class="far fa-search"></i></button>
                            </div>
                            <div class="nav-right-btn mt-2">
                                <a href="/contact" class="theme-btn"><span
                                        class="fal fa-pencil"></span>Apply Now</a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->


    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->

<!-- Content Start -->
@yield('content')
<!-- Content End -->

        <!-- footer area -->
        <footer class="footer-area">
            <div class="footer-shape">
                <img src="{{ asset('assets/img/shape/03.png') }}" alt="">
            </div>
            <div class="footer-widget">
                <div class="container">
                    <div class="row footer-widget-wrapper pt-100 pb-70">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-widget-box about-us">
                                <a href="/" class="footer-logo">
                                    <img src="{{ asset('/uploads/setting/'.$setting->logo_path) }}" alt="">
                                </a>
                                <p class="mb-3">
                                    {!! strip_tags($setting->motto_text, '<p><a><b><i><u><strong>') !!}

                                </p>
                                <ul class="footer-contact">
                                    <li><a href="tel:{{ $setting->phone_one }}"><i class="far fa-phone"></i>{{ $setting->phone_one }}</a></li>
                                    <li><i class="far fa-map-marker-alt"></i>{{ $setting->contact_address }}</li>
                                    <li><a href="mailto:{{ $setting->email_one }}"><i
                                                class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="b2dbdcd4ddf2d7cad3dfc2ded79cd1dddf">{{ $setting->email_one }}</span></a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Services</h4>
                                <ul class="footer-list">
                                    @foreach($service_subnavs as $service_subnav)
                                    @if ($service_subnav->id < 6)
                                    <li><a href="{{ route('service.single', $service_subnav->slug) }}"> <i class="fas fa-caret-right"></i>{{ $service_subnav->title }}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">More Services</h4>
                                <ul class="footer-list">
                                    @foreach($service_subnavs as $service_subnav)
                                    @if ($service_subnav->id > 5)
                                    <li><a href="{{ route('service.single', $service_subnav->slug) }}"> <i class="fas fa-caret-right"></i>{{ $service_subnav->title }}</a></li>
                                    @endif
                                    @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Important Links</h4>
                                <ul class="footer-list">
                                <li><a href="{{ route('about') }}"><i class="fas fa-caret-right"></i>About</a></li>
                                <li><a href="{{ route('contact') }}"><i class="fas fa-caret-right"></i>Contact</a></li>

                                    <li><a href="{{ route('career') }}"><i class="fas fa-caret-right"></i>Careers</a></li>
                                    <li><a href="{{ route('services') }}"><i class="fas fa-caret-right"></i>Services</a></li>
                                    <li><a href="{{ route('privacy') }}"><i class="fas fa-caret-right"></i>Privacy</a></li>
                                    <li><a href="{{ route('term') }}"><i class="fas fa-caret-right"></i>Terms</a></li>

                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="copyright-wrapper">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p class="copyright-text">
                                    &copy; {!! strip_tags($setting->footer_text, '<p><a><b><i><u><strong>') !!}
                                </p>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <ul class="footer-social">
                                  <li>  <a href="{{ $social->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                                    <li><a href="https://wa.me/{{ str_replace(' ', '', $social->whatsapp) }}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            @if(isset($social->youtube))
                            <li><a href="{{ $social->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->


        <!-- scroll-top -->
        <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
        <!-- scroll-top end -->


        <!-- js -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/counter-up.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        @if($livechat->status == 1)
    <script src="{{ asset('web/js/floating-wpp.min.js') }}"></script>
    @endif

    @if($livechat->status == 1)
    <!--Div where the WhatsApp will be rendered-->
    <div id="whatspp_live"></div>

    <script type="text/javascript">
        (function($) {
        "use strict";
          $('#whatspp_live').floatingWhatsApp({
            phone: '{{ $livechat->whatsapp_no }}', //WhatsApp Business phone number International format
            headerTitle: '{{ $livechat->whatsapp_title }}', //Popup Title
            popupMessage: '{{ $livechat->whatsapp_greeting }}', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="{{ asset('web/images/social/whatsapp.png') }}">', //Button Image
            headerColor: '{{ $livechat->whatsapp_color }}', //headerColor: 'crimson', //Custom header color
            backgroundColor: 'transparent', //backgroundColor: 'crimson', //Custom background button color
            position: "right"
          });
        })(jQuery);
    </script>
    @endif
<script type="text/javascript">
var para = document.getElementsByClassName("long-text")[0];
var text = para.innerHTML;
para.innerHTML = "";
var words = text.split(" ");
for (i = 0; i < 15; i++) {
  para.innerHTML += words[i] + " ";
}
para.innerHTML += "...";
</script>


    </body>


    <!-- Mirrored from live.themewild.com/eduka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Dec 2024 10:11:08 GMT -->
    </html>