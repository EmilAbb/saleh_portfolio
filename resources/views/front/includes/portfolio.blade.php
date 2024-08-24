<div class="grax_tm_section" id="portfolio">
    <div class="grax_tm_portfolio">
        <div class="container">
            <div class="grax_tm_title_holder">
                <h3>Selected <span>Works</span></h3>
            </div>

            <div class="categories">
              <div class="categories-inner">
                @foreach($categories as $category)
                      <p data-value="{{$category->id ?? ''}}">{{$category->name ?? ''}}</p>
                @endforeach
              </div>
            </div>

            <div class="portfolio_list">
                <ul class="gallery_zoom my_waypoint">
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
        </div>
    </div>
</div>
