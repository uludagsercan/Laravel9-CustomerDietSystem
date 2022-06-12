@extends('layouts.frontBase')

@section('title',"E Commerce Customer Diet")
@section('head')
    <link rel="stylesheet" href="{{asset('assets')}}/owncss/rating">
@endsection

@section('content')
    <div class="col-md-9 col-sm-7">
        <div class="product-page">
            <div class="row">
                <div class="col-md-6 col-sm-6">

                    <div class="product-main-image">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($treatmentData->image)}}" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="assets/pages/img/products/model7.jpg">
                    </div>
                    <div class="product-other-images">
                        @foreach($imagesData as $rs)

                            <a href="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"></a>
                        @endforeach
                    </div>

                </div>
                <div>
                    @include('home.message')
                </div>
                <div class="col-md-6 col-sm-6">
                    <h1>{{$treatmentData->title}}</h1>
                    <div class="price-availability-block clearfix">
                        <div class="price">
                            <strong><span>$</span>{{$treatmentData->price-$treatmentData->price*$treatmentData->discount/100}}</strong>
                            <em>$<span>{{$treatmentData->price*$treatmentData->discount/100}}</span></em>
                        </div>
                        <div class="availability">
                            <strong>@if($treatmentData->status>0) Tedavi mevcut @else Tedavi mevcut değil @endif </strong>
                        </div>
                    </div>
                    <div class="description">
                        <p>{{$treatmentData->description}}</p>
                    </div>
                    <form action="{{route('shopcart.store')}}" method="post">
                        @csrf

                    <div class="product-page-cart">

                        <input type="hidden" name="treatment_id" value="{{$treatmentData->id}}">
                        <button class="btn btn-primary" type="submit">Add to cart</button>
                    </div>
                    </form>
                    @php
                        $average = $treatmentData->comments->average('rate');
                    @endphp

                    <div class="review">


                            <i style="color: orange" class="fa fa-star  @if ($average<1) fa-star-o @endif"></i>
                            <i style="color: orange" class="fa fa-star @if ($average<2) fa-star-o @endif"></i>
                            <i style="color: orange" class="fa fa-star @if ($average<3) fa-star-o @endif"></i>
                            <i style="color: orange" class="fa fa-star @if ($average<4) fa-star-o @endif"></i>
                            <i style="color: orange" class="fa fa-star @if ($average<5) fa-star-o @endif"></i>
                         <a href="javascript:;" style="color: #0f0f0f">{{$reviews->count('id')}} / {{number_format($average,1)}} reviews</a>

                    </div>

                    <ul class="social-icons">
                        <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                        <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                        <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                        <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                        <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
                    </ul>
                </div>

                <div class="product-page-content">
                    <ul id="myTab" class="nav nav-tabs">
                        <li><a href="#Description" data-toggle="tab">Detail</a></li>

                        <li class="active"><a href="#Reviews" data-toggle="tab">Reviews (2)</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade" id="Description">
                            <p>{{$treatmentData->detail}}</p>
                        </div>

                        <div class="tab-pane fade in active" id="Reviews">
                            <!--<p>There are no reviews for this product.</p>-->

                            @foreach($reviews as $rs)
                            <div class="review-item clearfix">
                                <div class="review-item-submitted">
                                    <strong>{{$rs->user->name}}</strong>
                                    <em>{{$rs->created_at}}</em>

                                    <div class="review-form">
                                        <i style="color: orange" class="fa fa-star @if ($rs->rate<1) fa-star-o @endif"></i>
                                        <i style="color: orange" class="fa fa-star @if ($rs->rate<2) fa-star-o @endif"></i>
                                        <i style="color: orange" class="fa fa-star @if ($rs->rate<3) fa-star-o @endif"></i>
                                        <i style="color: orange" class="fa fa-star @if ($rs->rate<4) fa-star-o @endif"></i>
                                        <i style="color: orange" class="fa fa-star @if ($rs->rate<5) fa-star-o @endif"></i>
                                    </div>
                                </div>
                                <div class="review-item-content">
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->review}}</p>
                                </div>
                            </div>
                        @endforeach


                            <!-- BEGIN FORM-->
                            <form action="{{route('storecomment',$treatmentData->id)}}" method="post" class="reviews-form" role="form">
                              @csrf
                                <h2>Write a review</h2>
                                <div class="form-group">
                                    <label for="subject">Subject <span class="require">*</span></label>
                                    <input type="text" class="form-control" id="subject" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="review">Review</label>
                                    <textarea class="form-control" name="review" rows="5"></textarea>
                                </div>


                                    <label class="rating-label">Rating
                                        <input
                                            class="rating"
                                            max="5"
                                            oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
                                            step="1"
                                            style="--value:5"
                                            type="range"
                                            value="5"
                                            name="rate">

                                    </label>
                                @auth
                                <div class="padding-top-20">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                                @else
                                    <a href="/login" class="btn btn-primary">For Submit Your Review, Please Login</a>
                                @endauth
                            </form>

                            <!-- END FORM-->
                        </div>
                    </div>
                </div>

                <div class="sticker sticker-sale"></div>
            </div>
        </div>
    </div>
@endsection
