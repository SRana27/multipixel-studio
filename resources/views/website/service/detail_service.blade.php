@extends('website.master')
@section('title')
    service
@endsection

@section('body')


    <div class="container-fluid text-multipixeldeep py-5">
        <div class="container">
              <img src="{{asset($detail_service->image)}}" class="card-img-top center" alt="..." style="height: 450px">
              <div class="card-body">
                  <h2 class="text-white text-center pt-2 ">{{$detail_service->service_name}}</h2>
              </div>
            <div class="pb-5">
                <p style="text-align: justify" >{{$detail_service->description}}</p>
            </div>


          </div>
    </div>

@endsection

