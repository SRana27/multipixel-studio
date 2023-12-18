@extends('admin.master')
@section('title')
    Edit Member
@endsection
@section('body')
    <div class="container-fluid">
        <div class="col-md-12 m-auto mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Edit Member</h4>
                    <hr>
                    @if($message=Session::get('message'))

                        <div class="alert alert-success alert-dismissible fade show text-center">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lebel="close"></button>
                        </div>
                    @endif
                    <form class="form-horizontal p-t-20" method="post" action="{{route('update.member')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="member_id" value="{{$member->id}}">
                        <div class="form-group row">
                            <label for="memberName" class="col-sm-3 control-label">Member Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="memberName" value="{{$member->member_name}}" required name="member_name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="InputDesignation" class="col-sm-3 control-label"> Member Designation <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="InputDesignation" value="{{$member->designation}}" required name="designation" placeholder="designation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Member Image<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" class="dropify" name="image" />
                                <img src="{{asset($member->image)}}" height="80px" width="80px" alt="member_image-{{$member->id}}" class="pt-2">
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">update member</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
