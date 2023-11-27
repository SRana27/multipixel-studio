@extends('website.master')
@section('title')
    about
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
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{asset('/')}}website-assets/img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3 text-multipixel">Profession</p>
                            <div class="d-flex pe-5 text-multipixel">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0 text-multipixel">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{asset('/')}}website-assets/img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3 text-multipixel">Profession</p>
                            <div class="d-flex pe-5 text-multipixel">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0 text-multipixel">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{asset('/')}}website-assets/img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3 text-multipixel">Profession</p>
                            <div class="d-flex pe-5 text-multipixel">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0 text-multipixel" >Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{asset('/')}}website-assets/img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3 text-multipixel">Profession</p>
                            <div class="d-flex pe-5 text-multipixel">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0 text-multipixel">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->
@endsection
