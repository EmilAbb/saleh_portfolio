<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessageRequest;
use App\Models\About;
use App\Models\Category;
use App\Models\ContactMe;
use App\Models\ContactMessage;
use App\Models\FirstSection;
use App\Models\Menu;
use App\Models\ProgresTitle;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Touch;
use App\Models\Video;
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
        $socials = Social::all();
        $progressTitle = ProgresTitle::first();
        $contactMe = ContactMe::first();
        $touch = Touch::first();
        $setting = Setting::first();
        $categories = Category::all();
        $videos = Video::all();
        return view('front.pages.home',compact('menus','touch','videos','categories','setting','firstSection','socials','aboutMe','skillAll','skillFeatureds','progressTitle','contactMe'));
    }

    public function createMessage(ContactMessageRequest $contactMessageRequest)
    {
        $message = $contactMessageRequest->validated();
        ContactMessage::create($message);
        return redirect()->back()->with('success','Message send successfully');
    }


    public function videoFilter(Request $request)
    {
        $categoryID = $request->input('category_id');
        $videos = Video::where('category_id',$categoryID)->get();
        return view('front.partials.videos', compact('videos'))->render();
    }

}
