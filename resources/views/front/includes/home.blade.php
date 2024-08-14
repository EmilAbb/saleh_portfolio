<div class="grax_tm_hero creative" id="home">
    <div class="bg">
        <div class="image" data-img-url="{{asset('storage/'.$firstSection->image)}}"></div>
        <div class="overlay"></div>
    </div>
    <div class="content">
        <div class="container">
            <div class="details" data-animation="toTop"> <!-- Animation Values: toTop, toRight, scale, rotate -->
                <h3 class="fn_animation name">{{$firstSection->title ?? ''}}</h3>
                <span class="fn_animation job">{{$firstSection->text ?? ''}}</span>
            </div>
            <div class="grax_tm_down shape" data-skin="light">
                <div class="line_wrapper">
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="my_shape">
        <img class="svg" src="{{asset('assets/img/svg/separator.svg')}}" alt="" />
    </div>
</div>
