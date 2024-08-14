<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\FirstSection;
use App\Models\Menu;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $menus = Menu::all();
        $firstSection = FirstSection::first();
        return view('front.pages.home',compact('menus','firstSection'));
    }
}
