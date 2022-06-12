@extends('layouts.adminBase')
@section('title',"Admin panel")

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Product name</th>
                        <th>Subject</th>
                        <th>Review</th>
                        <th>Rate</th>
                        <th>Ip</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Delete</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->user->name}}</td>
                        <td><a href="{{route('treatment',['tid'=>$rs->treatment->id])}}">{{$rs->treatment->title}}</a></td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->rate}}</td>
                        <td>{{$rs->IP}}</td>
                        <td>{{$rs->status ? 'True':'False'}}</td>
                        <td><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-warning">Show</a></td>
                        <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-danger">Delete</a></td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
