@extends('layouts.adminBase')
@section('title',"Admin panel")

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->email}}</td>
                        <td>{{$rs->phone}}</td>
                        <td>{{$rs->message}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a></td>
                        <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
