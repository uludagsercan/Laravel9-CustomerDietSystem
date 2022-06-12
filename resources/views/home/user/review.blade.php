@extends('layouts.frontBase2')
@section('title',"E commerce- Reviews")

@section('content')
    <div class="col-md-3 col-sm-3">
        <h1 style="font-weight: 500">User Menu</h1>
        <hr><br>

        @include('home.user.usermenu')


    </div>
    <div class="col-md-9 col-sm-9">
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

                        <th>Status</th>

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
                        <td><a href="{{route('userx.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-danger">Delete</a></td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
