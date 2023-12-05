@extends('website.master')
@section('title')
    Contact us
@endsection

@section('body')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">Get In Touch</h3>
                <h1 class="mb-3">Contact for any query</h1>
                <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.</p>
            </div>
            <div class="contact-detail position-relative p-5">
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
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-5 rounded contact-form">
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="subject">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                            </div>
                            <div class="text-start">
                                <button  class="btn bg-multipixeldeep py-2 text-white px-4" type="button">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
