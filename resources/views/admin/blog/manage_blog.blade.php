@extends('admin.master')
@section('title')
    manage Blog
@endsection
@section('body')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title text-center ">Blog Manage Table</h4>
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
                                <th>Blog Type</th>
                                <th>description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $i=1; @endphp
                            @foreach($blogs as $blog)
                                <tr style="font-size: 13px">

                                    <td class="pt-5">{{$i++}}</td>
                                    <td  class="pt-5">{{$blog->blog_type}}</td>
                                    <td  class="pt-5" style=" display: -webkit-box; -webkit-box-orient: vertical; overflow-y: scroll; height:50px; width:300px;text-align: justify">{{$blog->description}}</td>
                                    <td><img src="{{asset($blog->image)}}" alt="{{$blog->name}}" height="80px" width="80px"></td>
                                    <td  class="pt-5">{{$blog->date}}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{route('edit.blog',['blog_id'=>$blog->id])}}" class=" btn btn-success mx-2 my-4 ">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <form action="{{route('delete.blog')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                            <button onclick="return confirm('are you sure for delete this blog')" class=" btn btn-danger my-4"><i class="ti-trash"></i></button>
                                        </form>
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
