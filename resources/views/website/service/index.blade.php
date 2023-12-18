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
            @foreach($sections as $section)
                @if($section->section_name=='service')
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h3 class="text-white">{{$section->section_title}}</h3>
                <h1>{{$section->section_tag}}</h1>
            </div>
                @endif
            @endforeach
            <div class="row g-5 services-inner">
                @foreach($services as $service)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-service">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <div class="mb-2">
                                    <img src="{{asset($service->image)}}" height="200px" width="100%" class="rounded" alt="service pic">
                                </div>
                                <h3 class="mb-3 text-white ">{{$service->service_name}}</h3>
                                <p class="mb-4 text-white" style=" display: -webkit-box;-webkit-box-orient: vertical; overflow: hidden; height: 120px;">{{$service->description}}.</p>
                                <a href="" class="btn bg-multipixeldeep text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->


@endsection

