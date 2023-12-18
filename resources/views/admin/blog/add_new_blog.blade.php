@extends('admin.master')
@section('title')
    Add Blog
@endsection
@section('body')
    <div class="container-fluid">
        <div class="col-md-12 m-auto mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Add Blog</h4>
                    <hr>
                    @if($message=Session::get('message'))

                        <div class="alert alert-success alert-dismissible fade show text-center">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lebel="close"></button>
                        </div>
                    @endif
                    <form class="form-horizontal p-t-20" method="post" action="{{route('save.blog')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="blogType" class="col-sm-3 control-label"> Blog Type <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="blogType" required name="blog_type" placeholder="blog type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="blogDescription" class="col-sm-3 control-label">Blog Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="blogDescription" required name="description" placeholder="blog description">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Blog Image<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" class="dropify" required name="image" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputDate" class="col-sm-3 control-label">Post Date <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date"  id="inputDate" required name="date">
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">add a new blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
