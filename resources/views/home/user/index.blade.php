@extends('layouts.frontBase2')

@section('title',"E Commerce User Menu")


@section('content')
    <div class="col-md-3 col-sm-3">
        <h1 style="font-weight: 500">User Menu</h1>
        <hr><br>

        @include('home.user.usermenu')


    </div>

    <div class="col-md-9 col-sm-9">
        <h1>User Profile</h1>
        <hr><br>
        <div class="content-page">
            @include('profile.show')

        </div>
    </div>
@endsection
