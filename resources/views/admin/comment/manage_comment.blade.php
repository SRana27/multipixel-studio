@extends('admin.master')
@section('title')
    Manage Comment
@endsection
@section('body')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title text-center ">Comment Manage Table</h4>
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
                                <th>Name</th>
                                <th>Comment</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $i=1; @endphp
                            @foreach($comments as $comment)
                                <tr style="font-size: 13px">

                                    <td class="pt-5">{{$i++}}</td>
                                    <td  class="pt-5">{{$comment->name}}</td>
                                    <td  class="pt-5"  style=" display: -webkit-box;-webkit-box-orient: vertical; overflow-y: scroll; height:50px;">{{$comment->description}}</td>
                                    <td><img src="{{asset($comment->image)}}" alt="{{$comment->name}}" height="80px" width="100px"></td>
                                    <td  class="pt-5" >{{$comment->status ==1 ?'Published': 'Unpublished'}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('edit.comment',['comment_id'=>$comment->id])}}" class=" btn btn-success mx-2 my-4 ">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        @if($comment->status==1)
                                            <a href="{{route('updateStatus.comment',['comment_id'=>$comment->id])}}" class=" btn btn-success  my-4 ">
                                                <i class="ti-lock"></i>
                                            </a>
                                        @else
                                            <a href="{{route('updateStatus.comment',['comment_id'=>$comment->id])}}" class=" btn btn-danger  my-4 ">
                                                <i class="ti-unlock"></i>
                                            </a>
                                        @endif
                                        <form action="{{route('delete.comment')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                            <button onclick="return confirm('are you sure for delete this comment')" class=" btn btn-danger mx-2 my-4"><i class="ti-trash"></i></button>
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
