<?php
$page_title = "About Us";
?>
@extends('web.layouts.master')
@section('content')

    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- about area -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <img class="img-1" src="assets/img/about/01.jpg" alt="">
                                        <div class="about-experience mt-4">
                                            <div class="about-experience-icon">
                                                <img src="assets/img/icon/exchange-idea.svg" alt="">
                                            </div>
                                            <b class="text-start">Many Years Of <br> Quality Service</b>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-2" src="assets/img/about/02.jpg" alt="">
                                        <img class="img-3 mt-4" src="assets/img/about/03.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> About Us</span>
                                <h2 class="site-title">
                                    Our Education System <span>Inspires</span> You More.
                                </h2>
                            </div>
                            <p class="about-text">
                            We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.
                            </p>
                            <div class="about-content">
                                <div class="row">

                                    <div class="col-md-10">
                                        <div class="about-quote">
                                            <p>IVORY GATE EDUCATION is on a mission to inspire and motivate young ones to
                                            Desire, pursue and attain academic excellence and diligence for outstanding performance in SAT, JAMB, SSCE, SS1 Foundation Class, BECE (Junior WAEC), Common Entrance,Virtual/ Online Classes and Information Technology.</p>
                                            <i class="far fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-bottom">
                                <a href="/about" class="theme-btn">Discover More<i
                                        class="fas fa-arrow-right-long"></i></a>
                                <div class="about-phone">
                                    <div class="icon"><i class="fal fa-headset"></i></div>
                                    <div class="number">
                                        <span>Call Now</span>
                                        <h6><a href="tel:+2348137107935">+2348137107935</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


        <!-- counter area -->
        <div class="counter-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/course.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="30" data-speed="3000">30</span>
                                <h6 class="title">+ Total Cources </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/graduation.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="200" data-speed="3000">200</span>
                                <h6 class="title">+ Our Students</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/teacher-2.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                                <h6 class="title">+ Skilled Lecturers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="assets/img/icon/award.svg" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="30" data-speed="3000">30</span>
                                <h6 class="title">+ Win Awards</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter area end -->

        @if(count($testimonials) > 0 )
        <!-- testimonial area -->
        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Testimonials</span>
                            <h2 class="site-title">What Our Students <span>Say</span></h2>
                            <p>These testimonials paint a picture of the positive impact our education center has on its students, parents, and educators.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    @foreach($testimonials as $testimonial)
                    <div class="testimonial-item">

                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">

                            {!! $testimonial->description !!}

                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-info">
                                <h4>{{ $testimonial->title }}</h4>
                                <p>{{ $testimonial->designation }}</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- testimonial area end -->
        @endif






    </main>
    @endsection
