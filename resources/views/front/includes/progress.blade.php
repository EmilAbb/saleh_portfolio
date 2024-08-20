<div class="grax_tm_progress_part">
    <div class="container">
        <div class="part_inner">
            <div class="left wow fadeInLeft" data-wow-duration="1.5s">
                <h3>{{$progressTitle->title ?? ''}}</h3>
                <p>{{$progressTitle->text ?? ''}}</p>
            </div>
            <div class="right wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                <div class="kioto_progress">
                @foreach($skillFeatureds as $skillFeatured)
                        <div class="progress_inner" data-value="{{$skillFeatured->skill_percent ?? ''}}">
                            <span><span class="label">{{$skillFeatured->skill_name ?? ''}}</span><span class="number">{{$skillFeatured->skill_percent ?? ''}}%</span></span>
                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                        </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
