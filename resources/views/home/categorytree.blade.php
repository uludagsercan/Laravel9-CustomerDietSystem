
@foreach($children as $subcategory)
<ul class="dropdown-menu"  style="display: block; margin-bottom: 2px" >
    @if(count($subcategory->children))
    <li class="list-group-item dropdown clearfix">
        <a href="javascript:void(0)" style="cursor:move;"><i class="fa fa-angle-right" onclick="redirectToTitle()">

            </i> {{$subcategory->title}} </a>
        <ul class="dropdown-menu">
            @include('home.categorytree',['children'=>$subcategory->children])

        </ul>
    </li>
    @else

        <li><a href="{{route('categorytreatments',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
    @endif
</ul>
@endforeach
<script>
    function redirectToTitle(){
        window.location.href="{{route('categorytreatments',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}"
    }
</script>
