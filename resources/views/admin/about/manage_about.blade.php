@extends('admin.master')
@section('title')
    manage About
@endsection
@section('body')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title text-center ">About Manage Table</h4>
                    <hr>
                    @if($message=Session::get('message'))

                        <div class="alert alert-success alert-dismissible fade show text-center">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lebel="close"></button>
                        </div>
                    @endif
                    <div class=" table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr class="text-center">
                                <th>sl</th>
                                <th>Section Name</th>
                                <th>title</th>
                                <th>description</th>
                                <th>Image-Top</th>
                                <th>Image-Down</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $i=1; @endphp
                            @foreach($abouts as $about)
                                <tr>

                                    <td class="pt-5">{{$i++}}</td>
                                    <td class="pt-5">{{$about->section_name}}</td>
                                    <td>{{$about->title}}</td>
                                    <td class="py-5 " style=" display: -webkit-box; -webkit-box-orient: vertical; overflow-y: scroll; height:80px; width:300px;text-align: justify">{{$about->description}} </td>
                                    <td><img src="{{asset($about->image_top)}}" alt="image_top" height="80px"  width="100px"></td>
                                    <td><img src="{{asset($about->image_down)}}" alt="image_down" height="80px"  width="100px"></td>
                                    <td class="d-flex pb-5 ">
                                        <a href="{{route('edit.about',['about_id'=>$about->id])}}" class=" btn btn-success mx-2 my-5">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        @if(count($abouts)>1)
                                        <form action="{{route('delete.about')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="about_id" value="{{$about->id}}">
                                            <button onclick="return confirm('are you sure for delete this carousel')"  class=" btn btn-danger mx-2 my-4"><i class="ti-trash"></i></button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
