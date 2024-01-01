@extends('website.master')
@section('title')
Blog details
@endsection

@section('body')
    <div class="container-fluid text-multipixeldeep py-5">
        <div class="container">
            <div class="detail-blog">
                <img src="{{asset($blog->image)}}" class="card-img-top pb-2" alt="..." style="max-width:500px;max-height:320px;float:left;border-radius: 10px;margin-right: 15px;">
                <div class="text-box pb-5">
                    <h1 class="text-multipixel text-center"> Blog Type: {{$blog->blog_type}}</h1>
                    <h4 class="text-warning text-center">Date: {{$blog->date}}</h4>
                    <p class="detail-description pt-4">{{$blog->description}}
                </div>
            </div>
        </div>
    </div>
@endsection

