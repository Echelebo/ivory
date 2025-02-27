@extends('web.layouts.master')

@php
    $header = \App\Models\PageSetup::page('services');
@endphp
@if(isset($header))

    @section('title', $service->title)

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
    <meta property='og:title' content="{{ $service->title }}"/>
    <meta property='og:description' content="{!! str_limit(strip_tags($service->description), 160, ' ...') !!}"/>
    <meta property='og:url' content="{{ route('service.single', $service->slug) }}"/>
    <meta property='og:image' content="{{ asset('uploads/service/'.$service->image_path) }}"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{!! '@'.str_replace(' ', '', $setting->title) !!}" />
    <meta name="twitter:creator" content="@ivorygate" />
    <meta name="twitter:url" content="{{ route('service.single', $service->slug) }}" />
    <meta name="twitter:title" content="{{ $service->title }}" />
    <meta name="twitter:description" content="{!! str_limit(strip_tags($service->description), 160, ' ...') !!}" />
    <meta name="twitter:image" content="{{ asset('uploads/service/'.$service->image_path) }}" />
    @endif
@endsection

@section('content')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $service->title }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $service->title }}</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- department-single -->
    <div class="department-single-area py-120">
        <div class="container">
            <div class="department-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="department-sidebar">
                            <div class="widget category">
                                <h4 class="widget-title">Our Services</h4>
                                <div class="category-list">
                                    @foreach($service_subnavs as $service_subnav)
                                    <a href="{{ route('service.single', $service_subnav->slug) }}"><i class="far fa-long-arrow-right"></i>{{ $service_subnav->title }}</a>
                                    @endforeach

                                </div>
                            </div>
                            <div class="widget department-download">
                                <h4 class="widget-title">Free Resources</h4>
                                @foreach($workprogress as $workprogres)
                                <a href="{{ $workprogres->link }}" target="_blank"><i class="far fa-file-alt"></i> {{ $workprogres->title }}</a>
                                @endforeach

                                <a href="{{ route('blog') }}"><i class="far fa-file-alt"></i> Blog</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="department-details">

                            <div class="department-details">
                                <h3 class="mb-20">{{ $service->title }}</h3>
                                <p class="mb-20">
                                    {!! strip_tags($service->short_desc) !!}
                                </p>

                                {!! $service->description !!}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- department-single end-->

    </main>
    @endsection