<div class="portfolio_list" id="videos">
<ul class="gallery_zoom my_waypoint" >
    @foreach($videos as $video)
        <li class="wow fadeInLeft" data-wow-duration="1.5s">
            <div class="list_inner">
                <div class="image">
                    <img src="{{asset('storage/'.$video->cover_photo ?? '')}}" alt="" style="height: 254px"/>
                    <div class="main" data-img-url="{{asset('storage/'.$video->cover_photo ?? '')}}" style="height: 254px"></div>
                </div>
                <div class="overlay"></div>
                <div class="details">
                    <span>{{$video->category->name ?? ''}}</span>
                    <h3>{{$video->video_name ?? ''}}</h3>
                </div>
                <a class="grax_tm_full_link popup-youtube" href="{{$video->video_link ?? ''}}"></a>
            </div>
        </li>

    @endforeach
</ul>
</div>
