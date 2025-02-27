@extends('web.layouts.master')
@php
$header = \App\Models\PageSetup::page('services');
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
        <h2 class="breadcrumb-title">Our Services</h2>
        <ul class="breadcrumb-menu">
            <li><a href="/">Home</a></li>
            <li class="active">Our Services</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<!-- department area -->
<div class="department-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Services</span>
                    <h2 class="site-title">Browse Our <span>Services</span></h2>
                    <p>Ivorygate services are designed to meet the diverse needs of students and families in the community, fostering an inclusive and supportive learning environment.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-3">
                <div class="department-item">
                    <div class="department-icon">
                        <img src="{{ asset('uploads/service/'.$service->image_path) }}" alt="">
                    </div>
                    <div class="department-info">
                        <h4 class="department-title">{{ $service->title }}</h4>
                        <p>{!! str_limit(strip_tags($service->short_desc), 120, ' ...') !!}</p>
                        <div class="department-btn">
                            <a href="{{ route('service.single', $service->slug) }}">Read More<i class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- department area end -->

</main>

@endsection