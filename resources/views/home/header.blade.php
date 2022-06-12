<div class="pre-header">
    <div class="container">
        <div class="row">

            <!-- END TOP BAR LEFT PART -->
            <!-- BEGIN TOP BAR MENU -->

            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">
                    @auth
                        <li><a href="shop-account.html">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                    @endauth
                    @auth
                    <li><a href="{{route('userx.index')}}">My Account</a></li>
                        @endauth
                    <li><a href="shop-checkout.html">Checkout</a></li>
                    @auth
                        <li><a href="/logoutuser">Log out</a></li>
                    @else
                        <li><a href="/loginuser">Log in</a></li>
                        <li><a href="/registeruser">Join</a></li>
                    @endauth


                </ul>
            </div>

            <!-- END TOP BAR MENU -->
        </div>
    </div>
</div>
<div class="header">
    <div class="container">


        <a class="site-logo" href="shop-index.html"><img src="assets/corporate/img/logos/logo-shop-red.png" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
            <div class="top-cart-info">
                <a href="javascript:void(0);" class="top-cart-info-count">{{\App\Http\Controllers\ShopCartController::countshopcart()}} items</a>
                <a href="javascript:void(0);" class="top-cart-info-value">${{\App\Http\Controllers\ShopCartController::totalPrice()}}</a>
            </div>
            <i class="fa fa-shopping-cart"></i>

            <div class="top-cart-content-wrapper">
                <div class="top-cart-content">
                    <ul class="scroller" style="height: 250px;">
                        @foreach($shopCartItem as $rs)
                        <li>
                            <a href="shop-item.html"><img src="" alt="Rolex Classic Watch" width="37" height="34"></a>
                            <span class="cart-content-count">x 1</span>
                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                            <em>$1230</em>
                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="text-right">
                        <a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a>
                        <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
            <ul>



                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>

                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('references')}}">References</a></li>
                <li><a href="{{route('faq')}}">Faq</a></li>

                <!-- BEGIN TOP SEARCH -->

                <!-- END TOP SEARCH -->
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
