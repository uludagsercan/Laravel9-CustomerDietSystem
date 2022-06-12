@extends('layouts.frontBase')

@section('title',"E Commerce Customer Diet")
@section('keywords',$setting->keywords)
@section('description',$setting->description)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))

@section('slider')
    @include('home.slider')
@endsection
@section('content')


            <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SALE PRODUCT -->
                <div class="col-md-12 sale-product">
               
                    <div class="owl-carousel owl-carousel5">


                        @include('home.message')
                        @foreach($dataList as $rs)
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="width: 194px; height: 254px"
                                     class="img-responsive" alt="Berry Lace Dress">
                                <div>

                                    <a href="{{route('treatment',[$rs->id])}}" class="btn btn-default fancybox-fast-view">More Detail</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">{{$rs->title}}</a></h3>
                            <div class="pi-price">${{$rs->price}}</div>
                            <a href="{{route('shopcart.add',['id'=>$rs->id])}}" class="btn btn-default add2cart">Add To Cart</a>
                            <div class="sticker sticker-sale"></div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- END SALE PRODUCT -->
            </div>
            <!-- END SALE PRODUCT & NEW ARRIVALS -->

            <!-- BEGIN SIDEBAR & CONTENT -->

            <!-- END SIDEBAR & CONTENT -->

            <!-- BEGIN TWO PRODUCTS & PROMO -->

            <!-- END TWO PRODUCTS & PROMO -->


@endsection
