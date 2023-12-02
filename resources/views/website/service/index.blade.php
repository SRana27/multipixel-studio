@extends('website.master')
@section('title')
    service
@endsection

@section('body')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Our Services</h3>
                <h1>Services Built Specifically For Your Business</h1>
            </div>
            <div class="row g-5 services-inner">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-service">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <div class="mb-2">
                                    <img src="{{asset('/')}}website-assets/img/videoedt.jpg" height="200px" width="100%" class="rounded">
                                </div>
                                {{--                                <i class="fa fa-code fa-7x mb-4 text-primary"></i>--}}
                                <h3 class="mb-3 text-white ">Video Editing</h3>
                                <p class="mb-4 text-white">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn bg-multipixeldeep text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-service">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                {{--                                <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>--}}
                                <div class="mb-2">
                                    <img src="{{asset('/')}}website-assets/img/graphic.jpg" height="200px" width="100%" class="rounded">
                                </div>
                                <h3 class="mb-3  text-white">Graphic Design</h3>
                                <p class="mb-4 text-white">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn bg-multipixeldeep text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-service">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                {{--                                <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>--}}
                                <div class="mb-2">
                                    <img src="{{asset('/')}}website-assets/img/animation.jpg" height="200px" width="100%" class="rounded">
                                </div>
                                <h4 class="mb-3 text-white">Animation</h4>
                                <p class="mb-4 text-white ">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn bg-multipixeldeep text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-service">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                {{--                                <i class="fa fa-envelope-open fa-7x mb-4 text-primary"></i>--}}
                                <div class="mb-2">
                                    <img src="{{asset('/')}}website-assets/img/digital.jpg" height="200px" width="100%" class="rounded">
                                </div>
                                <h3 class="mb-3 text-white">Digital Marketing</h3>
                                <p class="mb-4 text-white">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn bg-multipixeldeep text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-service">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                {{--                                <i class="fas fa-laptop fa-7x mb-4 text-primary"></i>--}}
                                <div class="mb-2">
                                    <img src="{{asset('/')}}website-assets/img/logo-design-1.jpg" height="200px" width="100%" class="rounded">
                                </div>
                                <h3 class="mb-3 text-white">Logo Design</h3>
                                <p class="mb-4 text-white">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn bg-multipixeldeep text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-service">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <div class="mb-2">
                                    <img src="{{asset('/')}}website-assets/img/webdevelopment.jpg" height="200px" width="100%" class="rounded">
                                </div>

                                {{--                                <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>--}}
                                <h4 class="mb-3 text-white">Web Development</h4>
                                <p class="mb-4 text-white">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn bg-multipixeldeep text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->


@endsection

