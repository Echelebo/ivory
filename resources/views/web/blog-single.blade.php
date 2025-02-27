@extends('web.layouts.master')

@php
    $header = \App\Models\PageSetup::page('blog');
@endphp
@if(isset($header))

    @section('title', $article->title)

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
    <meta property='og:title' content="{{ $article->title }}"/>
    <meta property='og:description' content="{!! str_limit(strip_tags($article->description), 160, ' ...') !!}"/>
    <meta property='og:url' content="{{ route('blog.single', $article->slug) }}"/>
    <meta property='og:image' content="{{ asset('uploads/article/'.$article->image_path) }}"/>


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{!! '@'.str_replace(' ', '', $setting->title) !!}" />
    <meta name="twitter:creator" content="@ivorygate" />
    <meta name="twitter:url" content="{{ route('blog.single', $article->slug) }}" />
    <meta name="twitter:title" content="{{ $article->title }}" />
    <meta name="twitter:description" content="{!! str_limit(strip_tags($article->description), 160, ' ...') !!}" />
    <meta name="twitter:image" content="{{ asset('uploads/article/'.$article->image_path) }}" />
    @endif
@endsection

@section('content')

<main class="main">

<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Blog</h2>
        <ul class="breadcrumb-menu">
            <li><a href="/">Home</a></li>
            <li class="active">Blog</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<!-- blog single area -->
<div class="blog-single-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-wrapper">
                    <div class="blog-single-content">
                        <div class="blog-thumb-img">
                            <img src="{{ asset('uploads/article/'.$article->image_path) }}" alt="{{ $article->title }}">
                        </div>
                        <div class="blog-info">

                            <div class="blog-details">
                                <h3 class="blog-details-title mb-20">{{ $article->title }}</h3>


                                {!! $article->description !!}

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar">
                    <!-- search-->
                    <div class="widget search">
                        <h5 class="widget-title">Search</h5>
                        <form class="search-form" method="get" action="{{ route('blog.search') }}">
                            <input class="form-control" placeholder="Search Here..." type="search" name="search" value="" value="@if(isset($search)){{ $search }}@endif" required="">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <!-- category -->

                    @if(count($recents) > 0)
                    <!-- recent post -->
                    <div class="widget recent-post">
                        <h5 class="widget-title">Recent Post</h5>
                        @foreach($recents as $key => $recent)
                        <div class="recent-post-single">
                            <div class="recent-post-img">
                                <img src="{{ asset('uploads/article/'.$recent->image_path) }}" alt="{{ $recent->title }}">
                            </div>
                            <div class="recent-post-bio">
                                <h6><a href="{{ route('blog.single', $recent->slug) }}">{!! str_limit(strip_tags($recent->title), 50, ' ...') !!}</a></h6>
                                <span><i class="far fa-clock"></i>{{ date('F d Y', strtotime($recent->created_at)) }}</span>
                            </div>
                        </div>
                        @endforeach


                    </div>

                    @endif


                </aside>
            </div>
        </div>
    </div>
</div>
<!-- blog single area end -->

</main>

@endsection