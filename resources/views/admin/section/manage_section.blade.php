@extends('admin.master')
@section('title')
    manage Section
@endsection
@section('body')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title text-center ">Section Manage Table</h4>
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
                                <th> Sction title</th>
                                <th>Section Tag</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $i=1; @endphp
                            @foreach($sections as $section)
                                <tr>

                                    <td class="pt-5">{{$i++}}</td>
                                    <td class="pt-5">{{$section->section_name}}</td>
                                    <td class="pt-5">{{$section->section_title}}</td>
                                    <td class="pt-5" style="max-width:250px; overflow-x: scroll; white-space: nowrap;">{{$section->section_tag}} </td>
                                    <td class="d-flex ">
                                        <a href="{{route('edit.section',['section_id'=>$section->id])}}" class=" btn btn-success mx-2 my-4 ">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
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
