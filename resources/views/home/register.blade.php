@extends('layouts.frontBase2')

@section('title',"User Register")


@section('content')
    <div class="container">
        <div class="col-md-12 col-sm-12">


            @include('auth.register')

        </div>
    </div>

@endsection
