@extends('admin.master')
@section('title')
  Contact Message
@endsection
@section('body')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title text-center ">Message Manage Table</h4>
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
                                <th> Client name</th>
                                <th>Client email</th>
                                <th>Subject</th>
                                <th>Message</th>
{{--                                <th>Action</th>--}}
                            </tr>
                            </thead>

                            <tbody>
                            @php $i=1; @endphp
                            @foreach($messages as $message)
                                <tr style="font-size: 13px">

                                    <td class="pt-5">{{$i++}}</td>
                                    <td  class="pt-5">{{$message->name}}</td>
                                    <td  class="pt-5">{{$message->email}}</td>
                                    <td  class="pt-5">{{$message->subject}}</td>
                                    <td  class="pt-5" style=" display: -webkit-box; -webkit-box-orient: vertical; overflow-y: scroll; height:50px; width:auto">{{$message->message}}</td>
{{--                                    <td>--}}
{{--                                        <a href="{{route('view.message',['message_id'=>$message->id])}}" class=" btn btn-success mx-2 my-4 ">--}}
{{--                                            <i class="ti-eye"></i>--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
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
