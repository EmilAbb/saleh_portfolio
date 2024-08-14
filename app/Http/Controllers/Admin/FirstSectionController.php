<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FirstSectionRequest;
use App\Models\FirstSection;
use App\Services\FirstSectionService;
use Illuminate\Http\Request;

class FirstSectionController extends Controller
{
    public FirstSectionService $service;
    public function __construct(FirstSectionService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=FirstSection::all();
        return view('admin.first-section.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.first-section.form');
    }

    public function store(FirstSectionRequest $firstSectionRequest)
    {
        $this->service->store($firstSectionRequest);
        return redirect()->route('admin.first-section.index')->with('success','Added successfully');
    }

    public function edit(FirstSection $firstSection)
    {

        return view('admin.first-section.form',['model'=>$firstSection]);
    }

    public function update(FirstSectionRequest $firstSectionRequest ,FirstSection $firstSection)
    {
        $this->service->update($firstSectionRequest,$firstSection);
        return redirect()->route('admin.first-section.index')->with('success','Updated successfully !');
    }

    public function destroy(FirstSection $firstSection)
    {
        $this->service->delete($firstSection);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
