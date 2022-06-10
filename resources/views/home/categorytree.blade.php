
@foreach($children as $subcategory)
<ul class="dropdown-menu"  style="display: block; margin-bottom: 2px" >
    @if(count($subcategory->children))
    <li class="list-group-item dropdown clearfix">
        <a href="{{route('categorytreatments',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}"><button class="btn fa fa-angle-right">

            </button><a href="{{route('categorytreatments',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></a>
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
function deneme(id){

}
</script>
