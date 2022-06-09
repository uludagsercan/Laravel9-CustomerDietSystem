<!doctype html>
<html lang="tr">
<head>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>@yield('title')</title>
        <!-- CSS files -->
        <link href="{{asset("assets")}}/admin/dist/css/tabler.min.css" rel="stylesheet"/>
        <link href="{{asset("assets")}}/admin/dist/css/tabler-flags.min.css" rel="stylesheet"/>
        <link href="{{asset("assets")}}/admin/dist/css/tabler-payments.min.css" rel="stylesheet"/>
        <link href="{{asset("assets")}}/admin/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
        <link href="{{asset("assets")}}/admin/dist/css/demo.min.css" rel="stylesheet"/>
        @yield('head')
    </head>
</head>
<body>
<div class="page">


    @include('admin.header')

    @section('sidebar')
        @include('admin.sidebar')
    @show
    <div class="page-wrapper">
        <div class="page-body">



            <div class="container-xl">
                <div class="row row-deck row-cards">

                    @yield('content')



                </div>
            </div>
        </div>

        @section('footer')
            @include('admin.footer')
        @show
    </div>
</div>






<script src="{{asset("assets")}}/admin/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{asset("assets")}}/admin/dist/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="{{asset("assets")}}/admin/dist/libs/jsvectormap/dist/maps/world.js"></script>
<script src="{{asset("assets")}}/admin/dist/libs/jsvectormap/dist/maps/world-merc.js"></script>
<!-- Tabler Core -->
<script src="{{asset("assets")}}/admin/dist/js/tabler.min.js"></script>
<script src="{{asset("assets")}}/admin/dist/js/demo.min.js"></script>


</body>
</html>
