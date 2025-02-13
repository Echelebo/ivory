@extends('web.layouts.master')

@section('content')

<?php
$page_title = "Home";
?>
<main class="main">

        <!-- hero slider -->
        <div class="hero-section">
            <div class="hero-slider owl-carousel owl-theme">
                <div class="hero-single" style="background: url(assets/img/slider/slider-1.jpg)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                        <i class="far fa-book-open-reader"></i>Welcome To Ivorygate!
                                    </h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Start Your Beautiful And <span>Bright</span> Future
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                    Every teaching and learning journey is unique Following
                                    We'll help guide your way.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="/about" class="theme-btn">About Us<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="/contact" class="theme-btn theme-btn2">Contact Us<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="hero-single" style="background: url(assets/img/slider/slider-2.jpg)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                        <i class="far fa-book-open-reader"></i>Welcome To Ivorygate!
                                    </h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Never Stop Learning, Life Never Stop Teaching
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                    Combines the ideas of empowered learning and top-tier instruction for students.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="/about" class="theme-btn">About Us<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="/contact" class="theme-btn theme-btn2">Contact Us<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single" style="background: url(assets/img/slider/slider-3.jpg)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                        <i class="far fa-book-open-reader"></i>Welcome To Ivorygate!
                                    </h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Start Your Beautiful And <span>Bright</span> Future
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                    Our instructors are industry experts and passionate educators with a wealth of knowledge and experience.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="/about" class="theme-btn">About Us<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="/contact" class="theme-btn theme-btn2">Contact Us<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->


        <!-- feature area -->
        <div class="feature-area fa-negative">
            <div class="col-xl-9 ms-auto">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">01</span>
                                <div class="feature-icon">
                                    <img src="assets/img/icon/scholarship.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Scholarship Facility</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">02</span>
                                <div class="feature-icon">
                                    <img src="assets/img/icon/teacher.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Skilled Lecturers</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">03</span>
                                <div class="feature-icon">
                                    <img src="assets/img/icon/library.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Book Library Facility</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <span class="count">04</span>
                                <div class="feature-icon">
                                    <img src="assets/img/icon/money.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Affordable Price</h4>

                                </div>
                            </div>
                        </div>
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
                                <h6 class="title">+ Total Subjects  </h6>
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
                        <div class="col-lg-5 ms-lg-auto">
                            <div class="cta-content">
                                <h1>We have online group learning running - Join Today For Your Classes</h1>
                                <p>Our students have consistently achieved high scores in standardized tests, including Waec, Jamb.
                                In 2024, 92% of our graduates were accepted into top-tier universities.</p>
                                <div class="cta-btn">
                                    <a href="https://forms.gle/SdWRWBRSbBXMJtZT8" class="theme-btn" target="_blank">Join Group Now!<i
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
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/monitor.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title">Academic Tutoring</h4>
                            <p>One-on-one and group tutoring sessions across subjects (math, science, etc.).
                            Test preparation for standardized tests (e.g., SAT, JAMB, SSCE).</p>

                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/law.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title">SS1 Foundation Class</h4>
                            <p>Extended learning opportunities for the SS1 set, including science and art.</p>

                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/data.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title">College and Career Counseling</h4>
                            <p>Guidance on college selection, application processes, and scholarship opportunities.
                            Career assessment and planning services, including resume writing and interview preparation.</p>

                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/health.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title">Common Entrance</h4>
                            <p>Support and resources available for students preparing for the Common Entrance Examination, preparing them for transition to secondary education.</p>

                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-icon">
                            <img src="assets/img/icon/art.svg" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title">After-School Programs</h4>
                            <p>Supervised activities that include homework help, recreational activities, and skill-building exercises.</p>

                        </div>
                    </div>
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

                                { !! $testimonial->description !! }

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


        <!-- partner area -->

        <!-- partner area end -->

    </main>




@endsection