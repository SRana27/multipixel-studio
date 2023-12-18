@extends('admin.master')
@section('title')
    Add Section
@endsection
@section('body')
    <div class="container-fluid">
        <div class="col-md-12 m-auto mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Add section</h4>
                    <hr>
                    @if($message=Session::get('message'))

                        <div class="alert alert-success alert-dismissible fade show text-center">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lebel="close"></button>
                        </div>
                    @endif
                    <form class="form-horizontal p-t-20" method="post" action="{{route('save.section')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="sectionName" class="col-sm-3 control-label">Section Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="sectionName" required name="section_name" placeholder="Section Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="InputTitle3" class="col-sm-3 control-label"> Section Title <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="InputTitle3" required name="section_title" placeholder="Section title in fronted">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="InputTag" class="col-sm-3 control-label"> Section Tag <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="InputTag" required name="section_tag" placeholder="Section tag in fronted">
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New section</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
