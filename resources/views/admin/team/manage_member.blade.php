@extends('admin.master')
@section('title')
    manage Member
@endsection
@section('body')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title text-center ">Member Manage Table</h4>
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
                                <th>Member name</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $i=1; @endphp
                            @foreach($members as $member)
                                <tr style="font-size: 13px">

                                    <td class="pt-5">{{$i++}}</td>
                                    <td  class="pt-5">{{$member->member_name}}</td>
                                    <td  class="pt-5">{{$member->designation}}</td>
                                    <td><img src="{{asset($member->image)}}" alt="{{$member->name}}" height="80px" width="80px"></td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{route('edit.member',['member_id'=>$member->id])}}" class=" btn btn-success mx-2 my-4 ">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <form action="{{route('delete.member')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="member_id" value="{{$member->id}}">
                                            <button onclick="return confirm('are you sure for delete this member')" class=" btn btn-danger my-4"><i class="ti-trash"></i></button>
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
