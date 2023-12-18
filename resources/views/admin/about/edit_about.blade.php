@extends('admin.master')
@section('title')
    edit About
@endsection
@section('body')
    <div class="container-fluid">
        <div class="col-md-12 m-auto mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Edit About</h4>
                    <hr>
                    <form class="form-horizontal p-t-20" method="post" action="{{route('update.about')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="about_id" value="{{$about->id}}">
                        <div class="form-group row">
                            <label for="eInputName1" class="col-sm-3 control-label">Section Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="InputName1" readonly required value="{{$about->section_name}}" name="section_name" placeholder="Section Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="InputTitle3" class="col-sm-3 control-label">Title <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="InputTitle3" required value="{{$about->title}}" name="title" placeholder="About title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="InputDescription" class="col-sm-3 control-label">Description<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="InputDescription" required name="description"  placeholder="About description" cols="10" rows="5">{{$about->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Image Top<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now"  class="dropify"  name="image_top" />
                                <img src="{{asset($about->image_top)}}" alt="image_top" height="80">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Image Down<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now"  class="dropify"  name="image_down" />
                                <img src="{{asset($about->image_down)}}" alt="image_down" height="80">
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update About</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
