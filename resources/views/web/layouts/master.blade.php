<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Dec 2024 10:10:14 GMT -->
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IVORY GATE EDUCATION is on a mission to inspire and motivate young ones to Desire, pursue and attain academic excellence and diligence.">

    <meta name="keywords" content="education centre,education abuja">

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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

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
                            <a href="https://www.facebook.com/IvoryGateEducationCentreAbujaNigeria/"><i class="fab fa-facebook-f"></i></a>

                            <a href="https://wa.me/2348137107935"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-contact">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-location-dot"></i>Abuja, Nigeria</a>
                                </li>
                                <li>
                            <a href="mailto: contact@ivorygateeducation.org"><i class="far fa-envelopes"></i> <span class="__cf_email__" data-cfemail="30595e565f705548515d405c551e535f5d">contact@ivorygateeducation.org</span></a>
                                </li>
                                <li>
                            <a href="tel:+2348137107935"><i class="far fa-phone-volume"></i>+2348137107935</a>
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
                        <img src="assets/img/logo/logo.png" alt="logo">
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
                            <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                            <li class="nav-item mega-menu dropdown">
                                <a class="nav-link dropdown-toggle" href="/services" data-bs-toggle="dropdown">Our Services</a>
                                <div class="dropdown-menu fade-down">
                                    <div class="mega-content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>About Us</h5>
                                                    <div class="menu-about">
                                                        <a href="/" class="menu-about-logo"><img
                                                                src="assets/img/logo/logo-light.png" alt=""></a>
                                                        <p>We believe that every student deserves individualized support in reaching their personal education and career goals.</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>Our Programs</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item" href="/sat">SAT</a></li>
                                                        <li><a class="dropdown-item" href="/jamb">JAMB Class</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="/ssce">SSCE Class</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="/ss1-foundation">SS1 Foundation Class</a></li>
                                                        <li><a class="dropdown-item" href="/bece">BECE (Junior WAEC) Class</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>More Programs</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item"
                                                                href="/common-entrance">Common Entrance Class</a></li>
                                                        <li><a class="dropdown-item" href="/virtual">Virtual/Online Class</a></li>
                                                        <li><a class="dropdown-item" href="/icttraining">ICT Training</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="/volunteerism">Volunteerism</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="/leadership">Leadership</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <h5>Free Resources</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item" href="https://chat.whatsapp.com/B8Uka6NZBwfIcrnFeg2wJz" target="_blank">SAT Forum</a></li>
                                                        <li><a class="dropdown-item" href="https://chat.whatsapp.com/Gjhfm1mqDToKF5Bu2IF2p9" target="_blank">JAMB Forum</a></li>
                                                        <li><a class="dropdown-item" href="https://chat.whatsapp.com/DiELvZOkT9KK9RJKrUe0kS" target="_blank">SSCE Forum</a></li>
                                                        <li><a class="dropdown-item" href="/blog">Blog</a></li>
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
                                        <div class="container-fluid-x" style="margin: auto; width: 50%;">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <h5>CENTRE 1</h5>
                                                    <div class="menu-about">
                                                        <p>IVORY GATE Study Centre,<br />
                                                            25 Environmental Street,<br />
                                                            FHA Lugbe.</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <h5>CENTRE 2</h5>
                                                    <div class="menu-about">

                                                        <p>IVORY GATE Study Hub,<br />
                                                            El-Salem Estate, Lugbe.<br />
                                                            (Off Pyakasa Rd. Opp Penthouse Estate III)</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/career">Career</a></li>


                          <!--  <li class="nav-item ">
                                <a class="nav-link dropdown-toggle-x" href="/blog" data-bs-toggle="dropdown-x">Our Blog</a>

                            </li> -->
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
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
                <img src="assets/img/shape/03.png" alt="">
            </div>
            <div class="footer-widget">
                <div class="container">
                    <div class="row footer-widget-wrapper pt-100 pb-70">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-widget-box about-us">
                                <a href="/" class="footer-logo">
                                    <img src="assets/img/logo/logo-light.png" alt="">
                                </a>
                                <p class="mb-3">
                                we believe that every student deserves individualized support in reaching their personal education and career goals.
                                </p>
                                <ul class="footer-contact">
                                    <li><a href="tel:+2348137107935"><i class="far fa-phone"></i>+2348137107935</a></li>
                                    <li><i class="far fa-map-marker-alt"></i>Abuja, Nigeria</li>
                                    <li><a href="mailto:contact@ivorygateeducation"><i
                                                class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="b2dbdcd4ddf2d7cad3dfc2ded79cd1dddf">contact@ivorygateeducation.org</span></a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Services</h4>
                                <ul class="footer-list">

                                    <li><a href="/sat"><i class="fas fa-caret-right"></i>SAT Class</a></li>
                                    <li><a href="/ssce"><i class="fas fa-caret-right"></i>SSCE Class</a></li>
                                    <li><a href="/jamb"><i class="fas fa-caret-right"></i>JAMB Class</a></li>
                                    <li><a href="/volunteerism"><i class="fas fa-caret-right"></i>Volunteerism</a></li>
                                    <li><a href="/leadership"><i class="fas fa-caret-right"></i>Leadership</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">More Services</h4>
                                <ul class="footer-list">
                                <li><a href="/ss1-foundation"><i class="fas fa-caret-right"></i>SS1 Foundation</a></li>
                                    <li><a href="/bece"><i class="fas fa-caret-right"></i>BECE (Junior Waec)</a></li>
                                    <li><a href="/virtual"><i class="fas fa-caret-right"></i>Virtual/Online Class</a></li>
                                    <li><a href="/icttraining"><i class="fas fa-caret-right"></i>ICT Training</a></li>
                                    <li><a href="/common-entrance"><i class="fas fa-caret-right"></i>Common Entrance Class</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Important Links</h4>
                                <ul class="footer-list">
                                <li><a href="/about"><i class="fas fa-caret-right"></i>About</a></li>
                                <li><a href="/contact"><i class="fas fa-caret-right"></i>Contact</a></li>

                                    <li><a href="/career"><i class="fas fa-caret-right"></i>Careers</a></li>
                                    <li><a href="/services"><i class="fas fa-caret-right"></i>Services</a></li>
                                    <li><a href="/privacy"><i class="fas fa-caret-right"></i>Privacy</a></li>
                                    <li><a href="/term"><i class="fas fa-caret-right"></i>Terms</a></li>

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
                                    &copy; Copyright <span id="date"></span> <a href="/"> Ivorygate Education Center, </a> All Rights Reserved.
                                </p>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <ul class="footer-social">
                                    <li><a href="https://www.facebook.com/IvoryGateEducationCentreAbujaNigeria/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://wa.me/2348137107935"><i class="fab fa-whatsapp"></i></a></li>

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
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/counter-up.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>

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

    </body>


    <!-- Mirrored from live.themewild.com/eduka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Dec 2024 10:11:08 GMT -->
    </html>