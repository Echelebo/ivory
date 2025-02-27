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


@section('content')

<main class="main">

<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
    <div class="container">
        <h2 class="breadcrumb-title">Our Blog</h2>
        <ul class="breadcrumb-menu">
            <li><a href="/">Home</a></li>
            <li class="active">Our Blog</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->



<!-- blog area -->
<div class="blog-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Blog</span>
                    <h2 class="site-title">Latest News & <span>Blog</span></h2>
                    <p>We are passionate about empowering learners of all ages. Our mission is to provide valuable resources, insights, and inspiration to students, educators, and parents alike.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-6 col-lg-4">

                <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="blog-date"><i class="fal fa-calendar-alt"></i>{{ date('d M, Y', strtotime($article->created_at)) }}</div>
                    <div class="blog-item-img">
                        <img src="{{ asset('uploads/article/'.$article->image_path) }}" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> By Ivorygate</a></li>

                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="{{ route('blog.single', $article->slug) }}">{!! str_limit(strip_tags($article->description), 150, ' ...') !!}</a>
                        </h4>
                        <a class="theme-btn" href="{{ route('blog.single', $article->slug) }}">Read More<i class="fas fa-arrow-right-long"></i></a>
                    </div>
                </div>

            </div>
            @endforeach




        </div>
        <!-- pagination -->
       <!-- <div class="pagination-area">
            <div aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    -->
        <!-- pagination end -->
    </div>
</div>
<!-- blog area end -->

</main>
@endsection