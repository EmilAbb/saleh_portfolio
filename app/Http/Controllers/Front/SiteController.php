<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessageRequest;
use App\Models\About;
use App\Models\ContactMessage;
use App\Models\FirstSection;
use App\Models\Menu;
use App\Models\Skill;
use App\Models\Social;
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
        return view('front.pages.home',compact('menus','firstSection','socials','aboutMe','skillAll','skillFeatureds'));
    }

    public function createMessage(ContactMessageRequest $contactMessageRequest)
    {
        $message = $contactMessageRequest->validated();
        ContactMessage::create($message);
        return redirect()->back()->with('success','Message send successfully');
    }


}
