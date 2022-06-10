@extends('layouts.frontBase')

@section('title')

@section('content')
    <div class="col-md-9 col-sm-7">

        <!-- BEGIN PRODUCT LIST -->

        <div class="row product-list">
            <!-- PRODUCT ITEM START -->
            @foreach($treatmentData as $rs)
            <div class="col-md-3">
                <div class="product-item">
                    <div class="pi-img-wrapper">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="width: 165px;height: 193px" class="img-responsive">
                        <div>
                            <a href="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" class="btn btn-default fancybox-button">Zoom</a>
                            <a href="{{route('treatment',['tid'=>$rs->id])}}" class="btn btn-default fancybox-fast-view">View</a>
                        </div>
                    </div>

                    <h3><a href="{{route('treatment',['tid'=>$rs->id])}}"><b>Title:</b> {{$rs->title}}</a></h3>
                    <div class="pi-price">${{$rs->price}}</div>
                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                </div>
            </div>
        @endforeach
            <!-- PRODUCT ITEM END -->
            <!-- PRODUCT ITEM START -->

            <!-- PRODUCT ITEM END -->
        </div>

        <!-- END PRODUCT LIST -->
        <!-- BEGIN PAGINATOR -->
    </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
            <div class="col-md-8 col-sm-8">
                <ul class="pagination pull-right">
                    <li><a href="javascript:;">&laquo;</a></li>
                    <li><a href="javascript:;">1</a></li>
                    <li><span>2</span></li>
                    <li><a href="javascript:;">3</a></li>
                    <li><a href="javascript:;">4</a></li>
                    <li><a href="javascript:;">5</a></li>
                    <li><a href="javascript:;">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- END PAGINATOR -->
    </div>

@endsection
