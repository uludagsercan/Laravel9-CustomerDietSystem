@extends('layouts.adminBase')

@section('title','Show Treatment')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-title" class="nav-link active" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                        Title</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-description" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        Description</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-detail" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        Detail</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-keywords" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        Keywords</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-image" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        Image</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-status" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        Status</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-tax" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        Tax</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-discount" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        Discount</a>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-title">
                        <div>
                            {{$data->title}}
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-detail">
                        <div>
                            {!! $data->detail!!}
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-description">
                        <div>
                            {{$data->description}}
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-keywords">
                        <div>
                            {{$data->keywords}}
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-image">
                        <div>
                            <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}">
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-status">
                        <div>
                            {{$data->status ? 'True':'False'}}
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-tax">
                        <div>
                            {{$data->tax}}
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-discount">
                        <div>
                            {{$data->discount}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group text-end">
                    <a href="{{route('admin.treatment.edit',['id'=>$data->id])}}" class="btn btn-warning">Update</a>
                </div>

            </div>
        </div>
    </div>
@endsection
