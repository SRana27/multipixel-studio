@extends('website.master')
@section('title')
    Team Member
@endsection

@section('body')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown">Team Member</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-multipixeldeep justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Team </li>
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
    <!-- Team Start -->
    <div class="container-fluid py-5 mb-5 team">
        <div class="container">
            @foreach($sections as $section)
                @if($section->section_name=='team')
                    <div class="text-center mx-auto pb-5 wow fadeInLeft" data-wow-delay=".3s" style="max-width: 600px;">
                        <h3 class="text-white">{{$section->section_title}}</h3>
                        <h1>{{$section->section_tag}}</h1>
                    </div>
                @endif
            @endforeach
            <div class="owl-carousel team-carousel wow fadeInRight" data-wow-delay=".5s">
                @foreach($members as $member)
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{asset($member->image)}}" class="img-fluid w-100 rounded-circle" alt="" style="height: 230px;width: 100px">
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

@endsection
