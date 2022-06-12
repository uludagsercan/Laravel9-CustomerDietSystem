<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="@yield("description")" name="description">
    <meta content="@yield("keywords")" name="keywords">
    <meta content="Sercan Uludag" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="icon" href="@yield("icon")">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="{{asset('assets')}}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="{{asset('assets')}}/pages/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{asset('assets')}}/pages/css/components.css" rel="stylesheet">
    <link href="{{asset('assets')}}/pages/css/slider.css" rel="stylesheet">
    <link href="{{asset('assets')}}/pages/css/style-shop.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/corporate/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="{{asset('assets')}}/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="{{asset('assets')}}/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
    @yield("head")
</head>
<body>
@include('home.header')



    <div class="main">
        <div class="container">
            <div class="row margin-bottom-40">


                @yield('slider')
                @yield('content')
            </div>



        </div>
    </div>


    @include('home.footer')



    <script src="{{asset('assets')}}/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('assets')}}/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{asset('assets')}}/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="{{asset('assets')}}/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='{{asset('assets')}}/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="{{asset('assets')}}/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
    <script src="{{asset('assets')}}/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><!-- for slider-range -->
    <script src="{{asset('assets')}}/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="{{asset('assets')}}/pages/scripts/bs-carousel.js" type="text/javascript"></script>

    <script src="{{asset('assets')}}/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
</body>
</html>
