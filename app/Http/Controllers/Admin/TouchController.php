<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\TouchRequest;
use App\Models\Menu;
use App\Models\Touch;
use App\Services\MenuService;
use App\Services\TouchService;
use Illuminate\Http\Request;

class TouchController extends Controller
{
    public TouchService $service;
    public function __construct(TouchService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=Touch::all();
        return view('admin.touch.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.touch.form');
    }

    public function store(TouchRequest $touchRequest)
    {
        $this->service->store($touchRequest);
        return redirect()->route('admin.touch.index')->with('success','Added successfully');
    }

    public function edit(Touch $touch)
    {

        return view('admin.touch.form',['model'=>$touch]);
    }

    public function update(TouchRequest $touchRequest ,Touch $touch)
    {
        $this->service->update($touchRequest,$touch);
        return redirect()->route('admin.touch.index')->with('success','Updated successfully !');
    }

    public function destroy(Touch $touch)
    {
        $this->service->delete($touch);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
