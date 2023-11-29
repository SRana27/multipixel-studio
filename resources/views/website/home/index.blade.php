@extends('website.master')
@section('title')
  Welcome Multipixelstudio

@endsection

@section('body')

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{asset('/')}}website-assets/img/carousel-2.jpg" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-white h4 animated fadeInUp">Best IT Solutions</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">An Innovative IT Solutions Agency</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn bg-multipixeldeep rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                            <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn bg-multipixeldeep rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('/')}}website-assets/img/carousel-1.jpg" class="img-fluid" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-white h4 animated fadeInUp">Best IT Solutions</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Quality Digital Services You Really Need!</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn bg-multipixeldeep rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                            <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn bg-multipixeldeep rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
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
    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{asset('/')}}website-assets/img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{asset('/')}}website-assets/img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h3 class="text-white">About Us</h3>
                    <h1 class="mb-4">About HighTech Agency And It's Innovative IT Solutions</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo nec erat vestibulum, et malesuada augue laoreet.</p>
                    <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                    <a href="" class="btn bg-multipixeldeep rounded-pill px-5 py-3 text-white">More Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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



    <!-- Project Start -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Our Project</h3>
                <h1>Our Recently Completed Projects</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('/')}}website-assets/img/project-1.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Web design</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('/')}}website-assets/img/project-2.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Cyber Security</h4>
                                    <p class="m-0 text-white">Cyber Security Core</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('/')}}website-assets/img/project-3.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Mobile Info</h4>
                                    <p class="m-0 text-white">Upcomming Phone</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('/')}}website-assets/img/project-4.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Web Development</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('/')}}website-assets/img/project-5.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Digital Marketing</h4>
                                    <p class="m-0 text-white">Marketing Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('/')}}website-assets/img/project-6.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">keyword Research</h4>
                                    <p class="m-0 text-white">keyword Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

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
                            <h4 class="">Ms.jackling </h4>
                            <p class="m-0 pb-3 ">Profession</p>
                            <div class="d-flex pe-5 ">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0  ">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{asset('/')}}website-assets/img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="">Andertion</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5 ">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0 ">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{asset('/')}}website-assets/img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="">Mrs. Sendy </h4>
                            <p class="m-0 pb-3 ">Profession</p>
                            <div class="d-flex pe-5 ">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0 " >Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{asset('/')}}website-assets/img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="">Jons sina</h4>
                            <p class="m-0 pb-3 ">Profession</p>
                            <div class="d-flex pe-5 ">
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                                <i class="fas fa-star me-1 "></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0 ">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->

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


    <!-- Team Start -->
    <div class="container-fluid py-5 mb-5 team">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Our Team</h3>
                <h1>Meet our expert Team</h1>
            </div>
            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{asset('/')}}website-assets/img/team/boss.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Nabil </h4>
                                <p class="m-0 text-multipixeldeep">Head of department</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{asset('/')}}website-assets/img/team/maruf.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">abdullah al maruf</h4>
                                <p class="m-0 text-multipixeldeep">Video editor</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{asset('/')}}website-assets/img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="text-center py-3">
                                <h4 >TBA</h4>
                                <p class="m-0 text-multipixeldeep">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{asset('/')}}website-assets/img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Tba</h4>
                                <p class="m-0 text-multipixeldeep">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-multipixel rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Get In Touch</h3>
                <h1 class="mb-3">Contact for any query</h1>
                <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.</p>
            </div>
            <div class="contact-detail position-relative p-3">
                <div class="row g-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn " data-wow-delay=".3s">
                        <div class="d-flex  p-2 rounded">
                            <div class="flex-shrink-0 btn-square bg-multipixel rounded-circle" style="width: 50px; height: 50px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-4">
                                <span class="text-white" style="font-size: 20px">Address</span><br>
                                <span> <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank">23 rank Str, NY</a></span>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex  p-2 rounded">
                            <div class="flex-shrink-0 btn-square bg-multipixel rounded-circle " style="width: 50px; height: 50px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-4">
                                <span class="text-white" style="font-size: 20px">Call Us</span><br>
                                <span> <a href="tel:+0123456789" target="_blank">+012 3456 7890</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-6 wow fadeIn " data-wow-delay=".7s">
                        <div class="d-flex  p-2 rounded">
                            <div class="flex-shrink-0 btn-square bg-multipixel rounded-circle" style="width: 50px; height: 50px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-4 ">
                                <span class="text-white" style="font-size: 20px">Email Us</span><br>
                                <span ><a  href="" target="_blank">info@example.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt-5">
                    <div class="col-lg-6  wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 rounded contact-map">
                            <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12  wow fadeIn" data-wow-delay=".5s">
                        <div class=" rounded contact-form">
                            <div class="mb-4 ">
                                <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Project">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                            </div>
                            <div class="text-start">
                                <button  class="btn bg-white py-2 text-multipixel px-4" type="button">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
