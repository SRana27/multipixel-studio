    @extends('website.master')
    @section('title')
       about
    @endsection

    @section('body')
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb text-multipixeldeep justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

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
                            <p  style="font-family:Roboto;text-align: justify " >{{$about->description}}</p>
                            <a href="" class="btn bg-multipixeldeep rounded-pill px-4 py-3 text-white" style="font-family:Poppins">More Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- About End -->

        <div class="container-fluid py-5 mb-5 team">
            <div class="container">
                @foreach($sections as $section)
                    @if($section->section_name=='team')
                        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                            <h3 class="text-white">{{$section->section_title}}</h3>
                            <h1>{{$section->section_tag}}</h1>
                        </div>
                    @endif
                @endforeach
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
    @endsection

