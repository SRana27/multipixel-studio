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
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach($carousels as $key=>$carousel)
                <div class="carousel-item {{$key== 0 ? 'active':''}}">
                    <img src="{{asset($carousel->image)}}" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">

                        <div class="container carousel-content">
                            @if($message=Session::get('message'))

                                <div class="alert alert-success alert-dismissible fade show text-center">
                                    {{$message}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lebel="close"></button>
                                </div>
                            @endif
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">{{$carousel->title}}</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">{{$carousel->description}}</p>
{{--                            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn bg-multipixeldeep rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>--}}
                            <a href="{{route('contact')}}" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn bg-multipixeldeep rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
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
    <div class="container-fluid text-multipixeldeep py-4">
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
                        <h5 class="text-white mt-1">Total clients who love Munltipixel-studio</h5>
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
            @foreach($abouts as $about)
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{asset($about->image_top)}}" class="img-fluid w-75 rounded" alt="image_top" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{asset($about->image_down)}}" class="img-fluid w-100 rounded" alt="image_down">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h3 class="text-white">{{$about->section_name}}</h3>
                    <h1 class="mb-4 ">{{$about->title}}</h1>
                    <p  class="about-description" >{{$about->description}}</p>
                    <a href="{{route('about')}}" class="btn bg-multipixeldeep rounded-pill px-4 py-2 text-white" style="font-family:Poppins">More Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            @foreach($sections as $section)
                @if($section->section_name=='service')
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h3 class="text-white">{{$section->section_title}}</h3>
                        <h1>{{$section->section_tag}}</h1>
                    </div>
                @endif
            @endforeach
            <div class="row g-5 services-inner">
                @php($i=.0)
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{$i=$i+.3}}s">
                        <div class="services-item bg-service">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <div class="mb-2">
                                        <img src="{{asset($service->image)}}" height="200px" width="100%" class="rounded" alt="service pic">
                                    </div>
                                    <h3 class="mb-3 pt-2 text-white ">{{$service->service_name}}</h3>
                                    <p class="mb-4 text-white description" >{{$service->description}}.</p>
                                    <a href="{{route('detail.service',['service_id'=>$service->id])}}" target="_blank" class="btn bg-multipixeldeep text-white px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->



    <!-- Project Start -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            @foreach($sections as $section)
                @if($section->section_name=='project')
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h3 class="text-white">{{$section->section_title}}</h3>
                        <h1>{{$section->section_tag}}</h1>
                    </div>
                @endif
            @endforeach
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
            @foreach($sections as $section)
                @if($section->section_name=='comment')
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h3 class="text-white">{{$section->section_title}}</h3>
                        <h1>{{$section->section_tag}}</h1>
                    </div>
                @endif
            @endforeach
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



    <!-- Team Start -->
    <div class="container-fluid py-5 mb-5 team">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Our Team</h3>
                <h1>Meet our expert Team</h1>
            </div>
            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                @foreach($members as $member)
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{asset($member->image)}}" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center pt-2">
                                    <h4 class="pt-2">{{$member->member_name}}</h4>
                                    <p class="m-0 text-multipixeldeep">{{$member->designation}}</p>
                                </div>
                                <div class="text-center pb-4">
                                    <h4 >MULTIPIXEL STUDIO </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Blog Start -->
    <div class="container-fluid blog py-5 mb-5">
        <div class="container">
            @foreach($sections as $section)
                @if($section->section_name=='blog')
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h3 class="text-white">{{$section->section_title}}</h3>
                        <h1>{{$section->section_tag}}</h1>
                    </div>
                @endif
            @endforeach

            <div class="row g-5 justify-content-center">
                @php($i=.0)
                @foreach($blogs as $blog)
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="{{$i=$i+.3}}s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{asset($blog->image)}}" class=" w-100 rounded-top" alt="" height="300px">
                            <span class="position-absolute px-3 py-2 bg-multipixeldeep text-white rounded" style="top: -25px; right: 20px;font-family:'Segoe UI Light'">{{$blog->blog_type}}</span>

                            <div class="blog-content  text-center position-relative px-3" style="margin-top: 20px;">
                                <span class="text-multipixel">Date: {{$blog->date}}</span>
                                <p class="description text-multipixel">{{$blog->description}}</p>
                                <div class=" text-center ">
                                    <a href="{{route('detail.blog',['blog_id'=>$blog->id])}}" target="_blank" class="btn bg-multipixeldeep text-white  px-4 py-2 mb-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Get In Touch</h3>
                <h1 class="mb-3">Contact for any query</h1>
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
                        <div class=" rounded contact-form" style="font-family: Roboto">
                            <form action="{{route('save.message')}}" method="post">
                                @csrf
                                <div class="mb-4 ">
                                    <input type="text" class="form-control border-0 py-3" id="name"  name="name"
                                           placeholder="Your Name">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="form-control border-0 py-3"  name="email"
                                       id="email"  placeholder="Your Email">
                                </div>
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" name="subject"
                                        id="subject"  placeholder="Subject">
                                </div>
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" name="message"
                                             id="message"  placeholder="Message"></textarea>
                                </div>
                                <div class="text-start">
                                    <button id="submit" class="btn bg-multipixeldeep py-2 text-white px-4" type="submit">Send
                                        Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
