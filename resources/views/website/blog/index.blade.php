@extends('website.master')
@section('title')
   Latest Blog
@endsection

@section('body')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown"> Latest Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page"> blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".4s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{asset($blog->image)}}" class=" w-100 rounded-top" alt="" height="300px">
                        <span class="position-absolute px-3 py-2 bg-multipixeldeep text-white rounded" style="top: -25px; right: 20px;font-family:'Segoe UI Light'">{{$blog->blog_type}}</span>
                        <div class="blog-content  text-center position-relative px-3" style="margin-top: 20px;">
                            <span class="text-multipixel">Date: {{$blog->date}}</span>
                            <p class="description text-multipixel">{{$blog->description}}</p>
                            <div class=" text-center ">
                                <a href="{{route('detail.blog',['blog_id'=>$blog->id])}}" class="btn bg-multipixeldeep text-white  px-4 py-2 mb-2 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Blog End -->

@endsection
