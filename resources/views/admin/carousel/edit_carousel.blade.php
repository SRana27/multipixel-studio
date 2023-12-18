@extends('admin.master')
@section('title')
    edit Carousel
@endsection
@section('body')
    <div class="container-fluid">
        <div class="col-md-12 m-auto mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">edit Carousel</h4>
                    <hr>
                    <form class="form-horizontal p-t-20" method="post" action="{{route('update.carousel')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="carousel_id" value="{{$carousel->id}}">
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label"> Carouser Title </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputuname3" name="title" value="{{$carousel->title}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Carouser Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="exampleInputEmail3" name="description"  cols="10" rows="5">{{$carousel->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Carouser Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now"  class="dropify" name="image" />
                                <img src="{{asset($carousel->image)}}" alt="{{$carousel->id}}" height="80">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Publication status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio"  name="status" value="1"{{$carousel->status==1?'checked':''}}> Published </label>
                                <label><input type="radio"  name="status" value="2"{{$carousel->status==2?'checked':''}}> Unpublished </label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">update carousel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
