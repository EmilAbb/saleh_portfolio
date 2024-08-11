<div class="grax_tm_topbar">
    <div class="container">
        <div class="topbar_inner">
            <div class="logo">
                <a class="dark" href="#"><img src="{{asset('assets/img/logo/dark.png')}}" alt="" /></a>
                <a class="light" href="#"><img src="{{asset('assets/img/logo/logo.png')}}" alt="" /></a>
            </div>
            <div class="menu">
                <ul class="anchor_nav">
                    @foreach($menus as $menu)
                        <li class="{{$menu->class ?? ''}}"><a href="{{$menu->href ?? ''}}">{{$menu->menu ?? ''}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
