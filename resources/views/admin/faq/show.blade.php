@extends('layouts.adminBase')
@section('title',"Admin panel")

@section('content')


    <div class="table-responsive">
        <table class="table table-striped">

            <tbody>

                <tr>
                    <td>Id</td>
                    <td>{{$data->id}}</td>
                </tr>

                <tr>
                    <td>Question</td>
                    <td>{{$data->question}}</td>
                </tr>
                <tr>
                    <td>Answer</td>
                    <td>{!! $data->answer !!}</td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>{{$data->status ? 'True':'False'}}</td>
                </tr>
                <tr>

                    <td><a href="{{route('admin.faq.edit',['id'=>$data->id])}}" class="btn btn-warning">Update</a></td>
                    <td><a href="{{route('admin.faq.destroy',['id'=>$data->id])}}" class="btn btn-danger">Delete</a></td>
                </tr>



            </tbody>
        </table>
    </div>


@endsection
