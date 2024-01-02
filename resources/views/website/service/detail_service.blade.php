@extends('website.master')
@section('title')
    service details
@endsection

@section('body')
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-multipixeldeep mb-4 animated slideInDown">{{$detail_service->service_name}}</h1>
        </div>
    </div>

    <div class="container-fluid text-multipixeldeep py-5">
        <div class="container">
            <img src="{{asset($detail_service->image)}}" class="card-img-top center"  alt="..." style="height: 450px;">

            <div class="card-body py-4">
                <p class="detail-description pt-3">{{$detail_service->description}}</p>
            </div>


          </div>
    </div>

@endsection

