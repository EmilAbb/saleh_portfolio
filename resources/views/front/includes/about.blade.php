<div class="grax_tm_section" id="about">
    <div class="grax_tm_about">
        <div class="container">
            <div class="about_inner">
                <div class="left wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="image parallax" data-relative-input="true">
                        <img src="{{asset('storage/'.$aboutMe->image)}}" alt="" />
                        <div class="main layer" data-img-url="{{asset('storage/'.$aboutMe->image)}}" data-depth="0.04"></div>
                    </div>
                </div>
                <div class="right wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <div class="grax_tm_title_holder">
                        @php
                        $title = $aboutMe->title;
                        $parts = explode(' ', $title, 2);
                        $left = $parts[0];
                        $right = isset($parts[1]) ? $parts[1] : '';
                        @endphp
                        <h3>{{$left}} <span>{{$right}}</span></h3>
                    </div>
                    <div class="text">
                        <p>{{$aboutMe->text}}</p>
                    </div>
                    <div class="list">
                        <ul>
                            @foreach($skillAll as $skill)
                                <li>
                                    <div class="list_inner">
                                        <img class="svg" src="{{asset('assets/img/svg/checked.svg')}}" alt="" />
                                        <span>{{$skill->skill_name ?? ''}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="grax_tm_button">
                        <a href="{{asset('storage/'.$setting->cv ?? '')}}" download>Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
