<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use App\Models\Social;
use App\Services\SocialService;

class SocialController extends Controller
{
    public SocialService $service;
    public function __construct(SocialService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=Social::all();
        return view('admin.socials.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.socials.form');
    }

    public function store(SocialRequest $socialRequest)
    {
        $this->service->store($socialRequest);
        return redirect()->route('admin.socials.index')->with('success','Added successfully');
    }

    public function edit(Social $social)
    {

        return view('admin.socials.form',['model'=>$social]);
    }

    public function update(SocialRequest $socialRequest ,Social $social)
    {
        $this->service->update($socialRequest,$social);
        return redirect()->route('admin.socials.index')->with('success','Updated successfully !');
    }

    public function destroy(Social $social)
    {
        $this->service->delete($social);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
