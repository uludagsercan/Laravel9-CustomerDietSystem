@extends('layouts.frontBase')

@section('title',"E Commerce Customer Diet")


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

                    <div class="product-page-cart">

                        <button class="btn btn-primary" type="submit">Add to cart</button>
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
                        <li><a href="#Description" data-toggle="tab">Detay</a></li>

                        <li class="active"><a href="#Reviews" data-toggle="tab">Reviews (2)</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade" id="Description">
                            <p>{{$treatmentData->detail}}</p>
                        </div>

                        <div class="tab-pane fade in active" id="Reviews">
                            <!--<p>There are no reviews for this product.</p>-->
                            <div class="review-item clearfix">
                                <div class="review-item-submitted">
                                    <strong>Bob</strong>
                                    <em>30/12/2013 - 07:37</em>
                                    <div class="rateit" data-rateit-value="5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                </div>
                                <div class="review-item-content">
                                    <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                                </div>
                            </div>
                            <div class="review-item clearfix">
                                <div class="review-item-submitted">
                                    <strong>Mary</strong>
                                    <em>13/12/2013 - 17:49</em>
                                    <div class="rateit" data-rateit-value="2.5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                </div>
                                <div class="review-item-content">
                                    <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                                </div>
                            </div>

                            <!-- BEGIN FORM-->
                            <form action="#" class="reviews-form" role="form">
                                <h2>Write a review</h2>
                                <div class="form-group">
                                    <label for="name">Name <span class="require">*</span></label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="review">Review <span class="require">*</span></label>
                                    <textarea class="form-control" rows="8" id="review"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Rating</label>
                                    <input type="range" value="4" step="0.25" id="backing5">
                                    <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                                    </div>
                                </div>
                                <div class="padding-top-20">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
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
