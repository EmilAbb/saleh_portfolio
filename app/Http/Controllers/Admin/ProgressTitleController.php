<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\ProgresTitleRequest;
use App\Models\Menu;
use App\Models\ProgresTitle;
use App\Services\MenuService;
use App\Services\ProgresTitleService;
use Illuminate\Http\Request;

class ProgressTitleController extends Controller
{
    public ProgresTitleService $service;
    public function __construct(ProgresTitleService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=ProgresTitle::all();
        return view('admin.progress.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.progress.form');
    }

    public function store(ProgresTitleRequest $progressRequest)
    {
        $this->service->store($progressRequest);
        return redirect()->route('admin.progress.index')->with('success','Added successfully');
    }

    public function edit(ProgresTitle $progress)
    {

        return view('admin.progress.form',['model'=>$progress]);
    }

    public function update(ProgresTitleRequest $progressRequest ,ProgresTitle $progress)
    {
        $this->service->update($progressRequest,$progress);
        return redirect()->route('admin.progress.index')->with('success','Updated successfully !');
    }

    public function destroy(ProgresTitle $progress)
    {
        $this->service->delete($progress);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
