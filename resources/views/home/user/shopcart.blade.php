@extends('layouts.frontBase2')
@section('title',"E commerce- Reviews")

@section('content')
    <div class="col-md-3 col-sm-3">
        <h1 style="font-weight: 500">User Menu</h1>
        <hr><br>

        @include('home.user.usermenu')


    </div>
    <div class="col-md-9 col-sm-9">
        <div class="col-md-12 col-sm-12">
            <h1>Shopping cart</h1>
            <div class="goods-page">
                <div class="goods-data clearfix">
                    <div class="table-wrapper-responsive">
                        <table summary="Shopping cart">
                            <tbody><tr>
                                <th class="goods-page-image">Image</th>
                                <th class="goods-page-description">Title</th>

                                <th class="goods-page-price">Unit price</th>

                            </tr>
                            @php
                            $total = 0;
                            @endphp

                            @foreach($data as $rs)
                            <tr>
                                @php
                                $discountPrice = $rs->treatment->price- $rs->treatment->price*$rs->treatment->discount/100;
                                $total += $discountPrice;
                                @endphp
                                <td class="goods-page-image">
                                    <a href="javascript:;"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->treatment->image)}}" alt="Berry Lace Dress"></a>
                                </td>
                                <td class="goods-page-description">
                                    <h3><a href="javascript:;">{{$rs->treatment->title}}</a></h3>

                                    <em>{{$rs->treatment->description}}</em>
                                </td>

                                <td class="goods-page-price">
                                    <strong><span>$</span>{{$rs->treatment->price-$rs->treatment->discount*$rs->treatment->price/100}}</strong>
                                </td>

                                <td class="del-goods-col">
                                    <a class="del-goods" href="{{route('shopcart.index',['id'=>$rs->id])}};">&nbsp;</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody></table>
                    </div>

                    <div class="shopping-total">
                        <ul>
                            <li>
                                <em>Total</em>
                                <strong class="price"><span>$</span>{{$total}}</strong>
                            </li>


                        </ul>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button>
            </div>
        </div>
    </div>
@endsection
