@extends('web.layouts.master')
@section('title', $page->title)

@section('top_meta_tags')
@if(isset($page->description))
<meta name="description" content="{!! str_limit(strip_tags($page->description), 160, ' ...') !!}">
@else
<meta name="description" content="{!! str_limit(strip_tags($setting->description), 160, ' ...') !!}">
@endif
@endsection

@section('social_meta_tags')
    @if(isset($setting))
    <meta property="og:type" content="website">
    <meta property='og:site_name' content="{{ $setting->title }}"/>
    <meta property='og:title' content="{{ $page->title }}"/>
    <meta property='og:description' content="{!! str_limit(strip_tags($page->description), 160, ' ...') !!}"/>
    <meta property='og:url' content="{{ route('page.single', $page->slug) }}"/>
    <meta property='og:image' content="{{ asset('uploads/page/'.$page->image_path) }}"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{!! '@'.str_replace(' ', '', $setting->title) !!}" />
    <meta name="twitter:creator" content="@ivorygate" />
    <meta name="twitter:url" content="{{ route('page.single', $page->slug) }}" />
    <meta name="twitter:title" content="{{ $page->title }}" />
    <meta name="twitter:description" content="{!! str_limit(strip_tags($page->description), 160, ' ...') !!}" />
    <meta name="twitter:image" content="{{ asset('uploads/page/'.$page->image_path) }}" />
    @endif
@endsection

@section('content')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $page->title }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $page->title }}</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- privacy policy -->
    <div class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="terms-content">

                        {!! $page->description !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- privacy policy end -->

</main>

@endsection