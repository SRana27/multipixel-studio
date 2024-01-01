@extends('website.master')
@section('title')
    service details
@endsection

@section('body')


    <div class="container-fluid text-multipixeldeep py-5">
        <div class="container">
            <div class="card-body">
                <h1 class="text-white text-center pt-2">{{$detail_service->service_name}}</h1>
            </div>
              <img src="{{asset($detail_service->image)}}" class="card-img-top center" alt="..." style="height: 450px">

            <div class="py-5">
                <p class="detail-description">{{$detail_service->description}}</p>
            </div>


          </div>
    </div>

@endsection

