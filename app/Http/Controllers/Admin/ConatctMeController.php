<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMeRequest;
use App\Http\Requests\MenuRequest;
use App\Models\ContactMe;
use App\Models\Menu;
use App\Services\ContactMeService;
use App\Services\MenuService;
use Illuminate\Http\Request;

class ConatctMeController extends Controller
{
    public ContactMeService $service;
    public function __construct(ContactMeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=ContactMe::all();
        return view('admin.contactMe.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.contactMe.form');
    }

    public function store(ContactMeRequest $contactMeRequest)
    {
        $this->service->store($contactMeRequest);
        return redirect()->route('admin.contact-me.index')->with('success','Added successfully');
    }

    public function edit(ContactMe $contactMe)
    {

        return view('admin.contactMe.form',['model'=>$contactMe]);
    }

    public function update(ContactMeRequest $contactMeRequest ,ContactMe $contactMe)
    {
        $this->service->update($contactMeRequest,$contactMe);
        return redirect()->route('admin.contact-me.index')->with('success','Updated successfully !');
    }

    public function destroy(ContactMe $contactMe)
    {
        $this->service->delete($contactMe);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
