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

                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>

                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>

                            <td>{{$rs->email}}</td>

                            <td>@foreach($rs->roles as $role)
                                    {{ $role->name}}
                                @endforeach</td>

                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a></td>
                            <td><a href="{{route('admin.user.destroy',['id'=>$rs->id])}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
