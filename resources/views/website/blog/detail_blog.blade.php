@extends('website.master')
@section('title')
Blog details
@endsection

@section('body')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown">Blog-Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid text-multipixeldeep py-5">
        <div class="container">
            <div class="detail-blog">

                <img src="{{asset($blog->image)}}" class="card-img-top pb-2" alt="..." style="max-width:500px;max-height:320px;float:left;border-radius: 10px;margin-right: 15px;">
                <div class="text-box pb-5">
                    <h1 class="text-white text-end "> Blog Type: {{$blog->blog_type}}</h1>
                    <h4 class="text-multipixel text-end ">Date: {{$blog->date}}</h4>
                    <p class="detail-description pt-3">{{$blog->description}}
                </div>
            </div>
        </div>
    </div>
@endsection

