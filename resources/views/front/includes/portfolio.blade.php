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
                    <li class="wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('assets/img/placeholders/1-1.jpg')}}" alt="" />
                                <div class="main" data-img-url="{{asset('assets/img/portfolio/1.jpg')}}"></div>
                            </div>
                            <div class="overlay"></div>
                            <div class="details">
                                <span>Video</span>
                                <h3>Sweet Fruit</h3>
                            </div>
                            <a class="grax_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=P72VhAX_c5g"></a>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('assets/img/placeholders/1-1.jpg')}}" alt="" />
                                <div class="main" data-img-url="{{asset('assets/img/portfolio/1.jpg')}}"></div>
                            </div>
                            <div class="overlay"></div>
                            <div class="details">
                                <span>Video</span>
                                <h3>Sweet Fruit</h3>
                            </div>
                            <a class="grax_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=ICr_bOuM9Zo"></a>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('assets/img/placeholders/1-1.jpg')}}" alt="" />
                                <div class="main" data-img-url="{{asset('assets/img/portfolio/1.jpg')}}"></div>
                            </div>
                            <div class="overlay"></div>
                            <div class="details">
                                <span>Video</span>
                                <h3>Sweet Fruit</h3>
                            </div>
                            <a class="grax_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=ICr_bOuM9Zo"></a>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('assets/img/placeholders/1-1.jpg')}}" alt="" />
                                <div class="main" data-img-url="{{asset('assets/img/portfolio/1.jpg')}}"></div>
                            </div>
                            <div class="overlay"></div>
                            <div class="details">
                                <span>Video</span>
                                <h3>Sweet Fruit</h3>
                            </div>
                            <a class="grax_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=ICr_bOuM9Zo"></a>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('assets/img/placeholders/1-1.jpg')}}" alt="" />
                                <div class="main" data-img-url="{{asset('assets/img/portfolio/1.jpg')}}"></div>
                            </div>
                            <div class="overlay"></div>
                            <div class="details">
                                <span>Video</span>
                                <h3>Sweet Fruit</h3>
                            </div>
                            <a class="grax_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=ICr_bOuM9Zo"></a>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('assets/img/placeholders/1-1.jpg')}}" alt="" />
                                <div class="main" data-img-url="{{asset('assets/img/portfolio/1.jpg')}}"></div>
                            </div>
                            <div class="overlay"></div>
                            <div class="details">
                                <span>Video</span>
                                <h3>Sweet Fruit</h3>
                            </div>
                            <a class="grax_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=ICr_bOuM9Zo"></a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
