@extends('website.master')
@section('title')
   Testimonial
@endsection

@section('body')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Comment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Fact Start -->
    <div class="container-fluid text-multipixeldeep py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-multipixel counter-value">99</h1>
                        <h5 class="text-white mt-1">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-multipixel counter-value">25</h1>
                        <h5 class="text-white mt-1">Thousands of successful business</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-multipixel counter-value">120</h1>
                        <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-multipixel counter-value">5</h1>
                        <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            @foreach($sections as $section)
                @if($section->section_name=='comment')
                    <div class="text-center mx-auto pb-5 wow fadeInDown" data-wow-delay=".3s" style="max-width: 600px;">
                        <h3 class="text-white">{{$section->section_title}}</h3>
                        <h1>{{$section->section_tag}}</h1>
                    </div>
                @endif
            @endforeach
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                @foreach($comments as $comment)
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="{{asset($comment->image)}}" alt="client-image" width="100px" height="100px">
                            </div>
                            <div class="ms-4">
                                <h4 class="">{{$comment->name}}</h4>
                                <div class="d-flex pe-5 ">
                                    @for($i=1;$i<=$comment->ratting;$i++)
                                        <i class="fas fa-star me-1 "></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0 p-2 client-comment">{{$comment->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
