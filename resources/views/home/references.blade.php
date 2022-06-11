@extends('layouts.frontBase')

@section('title',"E Commerce Customer Diet")
@section('keywords',$setting->keywords)
@section('description',$setting->description)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')
    <div class="col-md-9 col-sm-9">
        <h1>About us</h1>
        <div class="content-page">
            {!! $slider->references !!}
        </div>
    </div>
@endsection
