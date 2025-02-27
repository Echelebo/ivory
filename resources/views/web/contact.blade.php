@extends('web.layouts.master')
@php
$header = \App\Models\PageSetup::page('contact-us');
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

@section('content')



    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- contact area -->
        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-map-location-dot"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Office Address</h5>
                                    <p>{{ $setting->contact_address }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Call Us</h5>
                                    <p>{{ $setting->phone_one }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-envelopes"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Us</h5>
                                    <p><a href="mailto: {{ $setting->email_one }}" class="__cf_email__" data-cfemail="ec85828a83ac89948d819c8089c28f8381">{{ $setting->email_one }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-alarm-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Open Time</h5>
                                    <p>{!! strip_tags($setting->office_hours) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact-img">
                                <img src="assets/img/contact/01.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Get In Touch</h2>
                                    <p>We'd love to hear from you! If you have any questions, feedback, or inquiries, please feel free to reach out using the form below. Our team is here to assist you and will get back to you as soon as possible.</p>
                                </div>


                                    <a href="{{ $social->pinterest }}" target="_blank" class="theme-btn">Send Us a
                                        Message <i class="far fa-paper-plane"></i></a>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact area -->

        <!-- map -->
        <div class="contact-map">
            {!! strip_tags($setting->google_map, '<iframe>') !!}
         </div>

    </main>



   @endsection