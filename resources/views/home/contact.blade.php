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

            <form action="{{route('messageStore')}}" method="post" class="default-form" role="form">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="require">*</span></label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Phone <span class="require">*</span></label>
                    <input type="tel" class="form-control" name="phone" id="phone">
                </div>
                <div class="form-group">
                    <label for="email">Subject <span class="require">*</span></label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>


               <!-- <div class="form-group mb-3 ">
                    <label class="form-label">Status</label>
                    <div>
                        <select class="form-select form-control">
                            <option value="new">New</option>
                            <option value="true">True</option>
                            <option value="false">False</option>
                        </select>
                    </div>
                </div>-->
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="8" name="message" id="message"></textarea>
                </div>
                <div class="padding-top-20">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
                <h1>@include('home.message')</h1>
            <!-- END FORM-->
        </div>
    </div>
@endsection
