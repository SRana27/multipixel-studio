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

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Our Testimonial</h3>
                <h1>Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                @foreach($comments as $comment)
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{asset($comment->image)}}" alt="client-image" width="100px" height="100px">
                        </div>
                        <div class="ms-4">
                            <h4 class="">{{$comment->name}}</h4>
                            <div class="d-flex pe-5 ">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                               <i class="fas fa-star-half-alt me-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0"  style=" display: -webkit-box;-webkit-line-clamp:5;-webkit-box-orient: vertical; overflow-y: scroll; height: 140px; text-align: justify;font-family:Roboto;font-size: 18px">{{$comment->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
