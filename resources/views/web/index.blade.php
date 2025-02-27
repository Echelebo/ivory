@extends('web.layouts.master')

@php
    $header = \App\Models\PageSetup::page('home');
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

@section('social_meta_tags')
    @if(isset($setting))
    <meta property="og:type" content="website">
    <meta property='og:site_name' content="{{ $setting->title }}"/>
    <meta property='og:title' content="{{ $setting->title }}"/>
    <meta property='og:description' content="{!! str_limit(strip_tags($setting->description), 160, ' ...') !!}"/>
    <meta property='og:url' content="{{ route('home') }}"/>
    <meta property='og:image' content="{{ asset('/uploads/setting/'.$setting->logo_path) }}"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{!! '@'.str_replace(' ', '', $setting->title) !!}" />
    <meta name="twitter:creator" content="@ivorygate" />
    <meta name="twitter:url" content="{{ route('home') }}" />
    <meta name="twitter:title" content="{{ $setting->title }}" />
    <meta name="twitter:description" content="{!! str_limit(strip_tags($setting->description), 160, ' ...') !!}" />
    <meta name="twitter:image" content="{{ asset('/uploads/setting/'.$setting->logo_path) }}" />
    @endif
@endsection

@section('content')

<main class="main">

        <!-- hero slider -->
        <div class="hero-section">
            <div class="hero-slider owl-carousel owl-theme">
                @foreach($sliders as $slider)
                <div class="hero-single" style="background: url({{ asset('uploads/slider/'.$slider->image_path) }});">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                        <i class="far fa-book-open-reader"></i>{{ $slider->link }}
                                    </h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        {{ $slider->title }}
                                    </h1>
                                    <div data-animation="fadeInLeft" data-delay=".75s">
                                        {!! $slider->description !!}
                                    </div>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="{{ route('about') }}" class="theme-btn">About Us<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="{{ route('contact') }}" class="theme-btn theme-btn2">Contact Us<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        <!-- hero slider end -->


        <!-- feature area -->
        <div class="feature-area fa-negative">
            <div class="col-xl-9 ms-auto">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        @foreach ($portfolios as $portfolio)

                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">@if ($portfolio->id == 6) 01 @elseif ($portfolio->id == 5) 02 @elseif ($portfolio->id == 4) 03 @elseif ($portfolio->id == 3) 04 @endif</span>
                                <div class="feature-icon">
                                    @if ($portfolio->id == 6) <img src="assets/img/icon/scholarship.svg" alt=""> @elseif ($portfolio->id == 5) <img src="assets/img/icon/teacher.svg" alt=""> @elseif ($portfolio->id == 4) <img src="assets/img/icon/library.svg" alt=""> @elseif ($portfolio->id == 3) <img src="assets/img/icon/money.svg" alt=""> @endif

                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">{{ $portfolio->title }}</h4>

                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- about area -->

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

        <!-- choose-area -->
        <div class="choose-area pt-80 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                            <div class="choose-content-info">
                                <div class="site-heading mb-0">
                                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Why Choose Us</span>
                                    <h2 class="site-title text-white mb-10">We Are Expert & <span>Do Our Best</span> For Your Goal</h2>
                                    <p class="text-white">
                                    We provides a focused learning environment with specialized instructors, tailored curriculum, smaller class sizes, personalized attention, and often access to additional resources like labs or technology, allowing for deeper engagement and improved learning outcomes compared to traditional schooling.
                                    </p>
                                </div>
                                <div class="choose-content-wrap">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/teacher-2.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Expert Teachers</h4>
                                                    <p>We typically focus on specific subjects or skills, enabling instructors to provide in-depth knowledge and expertise in that area.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/course-material.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Targeted curriculum</h4>
                                                    <p>Our curriculum is designed to directly address the specific skills or knowledge required for a particular field or exam, maximizing learning efficiency.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/online-course.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Career-focused approach</h4>
                                                    <p>We align our programs with industry needs and career pathways, providing practical skills and training relevant to the job market. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/money.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Supportive community</h4>
                                                    <p>Smaller student populations can foster a more supportive and collaborative learning environment where students can network and build relationships with peers and instructors.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                            <img src="assets/img/choose/01.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choose-area end -->


        <!-- gallery-area -->






        <!-- event area --
        <div class="event-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Events</span>
                            <h2 class="site-title">Our Upcoming <span>Events</span></h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="event-slider owl-carousel owl-theme">
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> Abuja, Nigeria</span>
                        </div>
                        <div class="event-img">
                            <img src="assets/img/event/01.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2025</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div>
                            <h4 class="event-title"><a href="#">High School Program 2025</a></h4>
                            <p></p>
                            <div class="event-btn">
                                <a href="#" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> Abuja, Nigeria</span>
                        </div>
                        <div class="event-img">
                            <img src="assets/img/event/02.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2025</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div>
                            <h4 class="event-title"><a href="#">High School Program 2024</a></h4>
                            <p></p>
                            <div class="event-btn">
                                <a href="#" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> Abuja, Nigeria</span>
                        </div>
                        <div class="event-img">
                            <img src="assets/img/event/03.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2025</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div>
                            <h4 class="event-title"><a href="#">High School Program 2025</a></h4>
                            <p></p>
                            <div class="event-btn">
                                <a href="#" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-location">
                            <span><i class="far fa-map-marker-alt"></i> Abuja, Nigeria</span>
                        </div>
                        <div class="event-img">
                            <img src="assets/img/event/04.jpg" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-meta">
                                <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2025</span>
                                <span class="event-time"><i class="far fa-clock"></i>10.00AM - 04.00PM</span>
                            </div>
                            <h4 class="event-title"><a href="#">High School Program 2025</a></h4>
                            <p></p>
                            <div class="event-btn">
                                <a href="#" class="theme-btn">Join Event<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- event area end -->
        <!-- cta-area -->
        <div class="cta-area">
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row align-items-center">
                        @php
        $section_action = \App\Models\Section::section('why-us');
    @endphp
                        <div class="col-lg-5 ms-lg-auto">
                            <div class="cta-content">
                                <h1>{{ $section_action->title }}</h1>
                                <p>{!! $section_action->description !!}</p>
                                <div class="cta-btn">
                                    <a href="{{ $social->linkedin }}" class="theme-btn" target="_blank">Join Group Now!<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area end -->

        <!-- department area -->
        <div class="department-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Services</span>
                            <h2 class="site-title">Browse Our <span>Services</span></h2>
                            <p>Ivorygate services are designed to meet the diverse needs of students and families in the community, fostering an inclusive and supportive learning environment. </p>
                        </div>
                    </div>
                </div>
                <div class="department-slider owl-carousel owl-theme">
                    @foreach($services as $service)
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="{{ asset('uploads/service/'.$service->image_path) }}" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title">{{ $service->title }}</h4>
                            <p class="long-text-x">{!! str_limit(strip_tags($service->short_desc), 120, ' ...') !!}  </p>
                            <div class="department-btn">
                                <a href="{{ route('service.single', $service->slug) }}">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- department area end -->




@if(count($testimonials) > 0 )
        <!-- testimonial area -->
        <div class="testimonial-area ts-bg pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Testimonials</span>
                            <h2 class="site-title text-white">What Our Students <span>Say</span></h2>
                            <p class="text-white">These testimonials paint a picture of the positive impact our education center has on its students, parents, and educators.</p>
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

                            {!! str_limit(strip_tags($testimonial->description), 200, ' ...') !!}

                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-info">
                                <h4>{{ $testimonial->title }}</h4>
                                <p class="long-text-x">{{ $testimonial->designation }}</p>
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


        <!-- partner area -->

        <!-- partner area end -->

    </main>




@endsection