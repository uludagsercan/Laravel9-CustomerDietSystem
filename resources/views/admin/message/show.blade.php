@extends('layouts.adminBase')
@section('title',"Admin panel")

@section('content')


    <div class="table-responsive">
        <table class="table table-striped">

            <tbody>
            <form method="post" action="{{route('admin.message.update',[$message->id])}}">
                @csrf
                <tr>
                    <td>Id: {{$message->id}}</td>

                <tr> <td>Name: {{$message->name}}</td></tr>
                <tr>    <td>Subject: {{$message->subject}}</td></tr>
                <tr>    <td>Email: {{$message->email}}</td></tr>
                <tr>    <td>Phone: {{$message->phone}}</td></tr>
                <tr>   <td>Message: {{$message->message}}</td></tr>
                <tr>    <td>Ip: {{$message->ip}}</td></tr>
                <tr>   <td>Status: {{$message->status}}</td></tr>
                <tr>    <td>Note: <textarea class="form-control" cols="100" name="note">{{$message->note}}</textarea></td></tr>
                <tr>    <td><button type="submit" class="btn btn-warning">Update</button></td></tr>


            </form>
            </tbody>
        </table>
    </div>


@endsection
