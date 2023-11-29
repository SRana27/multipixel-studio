@extends('website.master')
@section('title')
    about
@endsection

@section('body')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Our Blog</h3>
                <h1>Latest Blog & News</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{asset('/')}}website-assets/img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="" height="100%">
                        <span class="position-absolute px-3 py-2 bg-multipixeldeep text-white rounded" style="top: -25px; right: 20px;">Metting</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                            <div class="blog-icon btn bg-multipixeldeep px-2 rounded-pill py-1">
                                <a href="" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn bg-multipixeldeep px-3 py-3 ms-2 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="btn text-white px-2">Share<i class="fa fa-arrow-right ms-2"></i></p>
                                </div>
                                <div class="blog-icon-2 px-2">
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center  px-3" style="margin-top: -25px;">
                            <img src="{{asset('/')}}website-assets/img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="text-dark ">By Daniel Martin</h5>
                            <span class="text-multipixel">24 March 2023</span>
                            <p class="py-2 text-multipixel">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-multipixeldeep rounded-bottom">
                            <a href="" class="text-white"><small><i class="fas fa-share me-2 text-white"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-white"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{asset('/')}}website-assets/img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-3 py-2 bg-multipixeldeep text-white rounded" style="top: -25px; right: 20px;">Development</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                            <div class="blog-icon btn bg-multipixeldeep px-2 rounded-pill py-1">
                                <a href="" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn bg-multipixeldeep px-3 py-3 ms-2 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="btn text-white px-2">Share<i class="fa fa-arrow-right ms-2"></i></p>
                                </div>
                                <div class="blog-icon-2 px-2">
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="{{asset('/')}}website-assets/img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="text-dark">By Daniel Martin</h5>
                            <span class="text-multipixel">23 April 2023</span>
                            <p class="py-2 text-multipixel">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-multipixeldeep rounded-bottom">
                            <a href="" class="text-white"><small><i class="fas fa-share me-2 text-white"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-white"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{asset('/')}}website-assets/img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-3 py-2 bg-multipixeldeep text-white rounded" style="top: -25px; right: 20px;">Mobile App</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                            <div class="blog-icon btn bg-multipixeldeep px-2 rounded-pill py-1">
                                <a href="" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn bg-multipixeldeep px-3 py-3 ms-2 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="btn text-white px-2">Share<i class="fa fa-arrow-right ms-2"></i></p>
                                </div>
                                <div class="blog-icon-2 px-2">
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="blog-btn-social pt-2 me-3 "><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="{{asset('/')}}website-assets/img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="text-dark">By Daniel Martin</h5>
                            <span class="text-multipixel">30 jan 2023</span>
                            <p class="py-2 text-multipixel">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-multipixeldeep rounded-bottom">
                            <a href="" class="text-white"><small><i class="fas fa-share me-2 text-white"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-white"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection
