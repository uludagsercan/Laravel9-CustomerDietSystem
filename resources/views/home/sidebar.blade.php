    @php
    $mainCategories = \App\Http\Controllers\HomeController::mainCategoryList()
    @endphp
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar col-md-3 col-sm-5">
        <ul class="list-group margin-bottom-25 sidebar-menu">
            <li class="list-group-item clearfix dropdown">
                <a href="javascript:void(0);" class="collapsed">
                    <i class="fa fa-angle-right"></i>
                    Kategoriler

                </a>
                <ul class="dropdown-menu"  style="display: block">
                    @foreach($mainCategories as $rs)
                    <li class="list-group-item dropdown clearfix">

                        <a href="{{route('categorytreatments',['id'=>$rs->id,'slug'=>$rs->title])}}"><i class="fa fa-angle-right" ></i>
                            <a href="{{route('categorytreatments',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}} </a> </a>
                        @if(count($rs->children))
                            @include('home.categorytree',['children'=>$rs->children])
                        @endif
                    </li>
                    @endforeach
                </ul>
            </li>

        </ul>




    </div>

    <script>
        function redirectToTitle(id){

            window.location.href=""
        }
    </script>

