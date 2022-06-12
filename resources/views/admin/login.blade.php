@extends('layouts.frontBase3')
@section('title',"Login panel")

@section('content')

    <div class="panel-body row">

        @include('home.message')
    <div class="col-md-6 col-sm-6" style="margin-top: 10%; margin-left: 25%">
    <strong>Admin Login Panel</strong><br><br>
        <form role="form" action="{{route('loginadmincheck')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="email-login">E-Mail</label>
                <input type="text" id="email-login" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password-login">Password</label>
                <input type="password" name="password" id="password-login" class="form-control">
            </div>
            <a href="/reset-password">Forgotten Password?</a>
            <div class="padding-top-20">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <div class="padding-top-20">
                <a href="/registeruser" class="btn btn-primary">Register</a>
            </div>
            <hr>

        </form>
    </div>
</div>
@endsection
