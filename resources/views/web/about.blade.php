@php
$header = \App\Models\PageSetup::page('about-us');
@endphp
@if(isset($header))

@section('title', $header->meta_title)

@section('top_meta_tags')
@if(isset($header->meta_description))
<meta name="description" content="{!! str_limit(strip_tags($header->meta_description), 160, ' ...') !!}">
@else
<meta name="description" content="{!! str_limit(strip_tags($setting->description), 160, ' ...') !!}">
@endif

@if(isset($header->meta_keywords))
<meta name="keywords" content="{!! strip_tags($header->meta_keywords) !!}">
@else
<meta name="keywords" content="{!! strip_tags($setting->keywords) !!}">
@endif
@endsection

@endif
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
                                    <?php
$text = $about->title; // Your string
$words = explode(" ", $text); // Split the string into words

if (count($words) > 1 && count($words) < 4 ) {
    $words[1] = '<span style="color: #fda31b;">' . $words[1] . '</span>'; // Change color of the second word
}elseif (count($words) >= 4) {
    $words[3] = '<span style="color: #fda31b;">' . $words[3] . '</span>';
}

$result = implode(" ", $words); // Join the words back into a string
echo $result; // Output the result
?>
                                </h2>
                            </div>
                            <div class="about-text">
                                {!! $about->description !!}
                            </div>
                            <div class="about-content">
                                <div class="row">

                                    <div class="col-md-10">
                                        <div class="about-quote">
                                            <p>{!! $about->mission_desc !!}</p>
                                            <i class="far fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-bottom">
                                <a href="{{ route('about') }}" class="theme-btn">Discover More<i
                                        class="fas fa-arrow-right-long"></i></a>
                                <div class="about-phone">
                                    <div class="icon"><i class="fal fa-headset"></i></div>
                                    <div class="number">
                                        <span>Call Now</span>
                                        <h6><a href="tel:{{ $setting->phone_one }}">{{ $setting->phone_one }}</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->




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
                                <p>{!! str_limit(strip_tags($testimonial->designation), 20, ' ...') !!}</p>
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
