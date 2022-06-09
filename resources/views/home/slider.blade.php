<div class="page-slider margin-bottom-35">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
        <!-- Indicators -->
        <ul class="carousel-indicators">

            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>


        </ul>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" >

            <div class="item active" style="background-image: url({{\Illuminate\Support\Facades\Storage::url($sliderData[0]->image)}});background-size: cover;background-position: center center;">
                <div class="container">
                    <div class="carousel-position-three text-center">
                        <a class="carousel-btn-red" href="#" data-animation="animated fadeInUp">See More Details</a>
                    </div>
                </div>

            </div>

            <!-- First slide -->
            @foreach($sliderData as $slider)
                @if($sliderData[0]->id != $slider->id)

            <div class="item" style="background: url({{\Illuminate\Support\Facades\Storage::url($slider->image)}})">
                <div class="container">
                    <div class="carousel-position-three text-center">
                        <a class="carousel-btn-red" href="#" data-animation="animated fadeInUp">See More Details</a>
                    </div>
                </div>
            </div>

            @endif
        @endforeach
          <!-- Second slide -->

        <!-- Controls -->
        <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true" style="background: #0a66c2"></i>
        </a>
        <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true" style="background: #0a66c2"></i>
        </a>
    </div>
</div>
