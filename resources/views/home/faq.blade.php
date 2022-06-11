@extends('layouts.frontBase')

@section('title',"E Commerce Customer Diet")
@section('keywords',$setting->keywords)
@section('description',$setting->description)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
    <div class="col-md-9 col-sm-7">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        @foreach($dataList as $rs)
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-{{$loop->iteration}}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    {{$rs->question}}
                </button>
            </h2>
            <div id="panelsStayOpen-{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
               {!! $rs->answer !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
@endsection
