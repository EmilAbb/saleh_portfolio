<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\SettingRequest;
use App\Models\About;
use App\Models\Setting;
use App\Services\AboutService;
use App\Services\SettingService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public SettingService $service;
    public function __construct(SettingService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=Setting::all();
        return view('admin.setting.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.setting.form');
    }

    public function store(SettingRequest $settingRequest)
    {
        $this->service->store($settingRequest);
        return redirect()->route('admin.setting.index')->with('success','Added successfully');
    }

    public function edit(Setting $setting)
    {

        return view('admin.setting.form',['model'=>$setting]);
    }

    public function update(SettingRequest $settingRequest ,Setting $setting)
    {
        $this->service->update($settingRequest,$setting);
        return redirect()->route('admin.setting.index')->with('success','Updated successfully !');
    }

    public function destroy(Setting $setting)
    {
        $this->service->delete($setting);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
