<?php
$page_title = "Our Careers";
?>

@extends('web.layouts.master')
@section('content')

<main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Join Our Team</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">Join Our Team</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- course-single -->
        <div class="course-single-area py-120">
            <div class="container">
                <div class="course-single-wrapper">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="course-details">

                                <div class="course-details">
                                    <h3 class="mb-20">Join the IVORY GATE Team!
                                    </h3>
                                    <p class="mb-20">

Ivory Gate Education has the distinction of being the a trusted educational services partner  since 2012. Our flagship programme, Ivory Gate JAMB Intensive has helped hundreds of students gain admission to their choice universities, to the joy and admiration of their family and friends. The success of the programme has made us to expand into SAT coaching, Common Entrance coaching, grade enhancement programmes for JSS and SSS students and Youth Development.


                                    </p>
                                    <p>Today, more than ever, we remain steadfast in our mission to provide excellence in educational services both within Abuja and across the nation.</p>
                                    <p>Do you have what it takes to be part of the IVORY GATE Team? If you believe you have the skills to impart a love for learning, then join us now!</p>



                                    <div class="my-4">
                                        <div class="mb-3">
                                            <h3 class="mb-3">Why Work With Us?</h3>
                                        </div>
                                        <ul class="course-single-list">
                                            <li><i class="fas fa-check"></i>Impactful Work: You’ll have the opportunity to make a real difference in students' lives every day.</li>
                                            <li><i class="fas fa-check"></i>Collaborative Environment: We promote teamwork and encourage the sharing of ideas among staff and educators.</li>
                                            <li><i class="fas fa-check"></i>Professional Growth: We offer ongoing training, workshops, and advancement opportunities to support your career development.
                                            </li>
                                            <li><i class="fas fa-check"></i>Inclusive Community: Our diverse team reflects the communities we serve, and we embrace different perspectives and backgrounds.</li>

                                        </ul>
                                    </div>
                                    <div class="my-4">
                                        <h3 class="mb-3">Our Commitment to Diversity</h3>
                                        <p>At Ivorygate Education Center, we celebrate diversity and are committed to creating an inclusive environment for all employees. We welcome applicants from all backgrounds and experiences.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


 <!-- biography & skill -->
 <div class="biography-skil pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="biography">
                            <h4 class="mb-3">Our Company Values</h4>
                            <p class="mb-10">
                            We believe that our team is our greatest asset. We are looking for passionate, creative, and qualified individuals who share our commitment to making a positive impact in education. Whether you are an experienced educator, a specialist in educational technology, or support staff, we welcome diverse perspectives and innovative ideas.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-skill">
                            <h4 class="mb-3">Our Company Values </h4>
                            <div class="skills-section">
                                <div class="progress-box">
                                    <h5>Continuous Learning <span class="pull-right">98%</span></h5>
                                    <div class="progress" data-value="98">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Diversity <span class="pull-right">99%</span></h5>
                                    <div class="progress" data-value="99">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Purpose-driven
                                    <span class="pull-right">99%</span></h5>
                                    <div class="progress" data-value="99">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- biography & skill end -->
       <div class="mb-4 pt-80 pb-80" style="text-align: center; background-color: #f6f9fc;">
       <h1 >How to Apply</h1>
       <p align="center">If you’re ready to contribute to a vibrant educational community, please click below.</p>
       <a href="https://forms.gle/Zpu6QhsJTxBwqVbt5" target="_blank" class="theme-btn mt-4">Apply Here<i class="fas fa-arrow-right-long"></i></a>
        </div>


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


                    </div>
                </div>
            </div>
        </div>
        <!-- course-single end-->

    </main>

@endsection