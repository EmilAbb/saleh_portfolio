<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public AboutService $service;
    public function __construct(AboutService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=About::all();
        return view('admin.about.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.about.form');
    }

    public function store(AboutRequest $aboutRequest)
    {
        $this->service->store($aboutRequest);
        return redirect()->route('admin.about.index')->with('success','Added successfully');
    }

    public function edit(About $about)
    {

        return view('admin.about.form',['model'=>$about]);
    }

    public function update(AboutRequest $aboutRequest ,About $about)
    {
        $this->service->update($aboutRequest,$about);
        return redirect()->route('admin.about.index')->with('success','Updated successfully !');
    }

    public function destroy(About $about)
    {
        $this->service->delete($about);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
