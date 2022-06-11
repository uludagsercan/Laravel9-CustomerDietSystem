@extends('layouts.frontBase')

@section('title',"E Commerce Customer Diet")
@section('keywords',$setting->keywords)
@section('description',$setting->description)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))

@section('content')
    <div class="col-md-9 col-sm-9">
        <h1>Contact</h1>
        <div class="content-page">

           
            {!! $setting->contact !!}
            <!-- BEGIN FORM-->
            <form action="#" class="default-form" role="form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="require">*</span></label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="8" id="message"></textarea>
                </div>
                <div class="padding-top-20">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
@endsection
