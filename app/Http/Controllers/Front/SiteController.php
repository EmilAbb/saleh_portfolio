<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\FirstSection;
use App\Models\Menu;
use App\Models\Skill;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $menus = Menu::all();
        $firstSection = FirstSection::first();
        $aboutMe = About::first();
        $skillAll = Skill::all();
        $skillFeatureds = Skill::where('featured',1)->get();
        return view('front.pages.home',compact('menus','firstSection','aboutMe','skillAll','skillFeatureds'));
    }
}
