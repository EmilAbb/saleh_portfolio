<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use App\Services\SkillService;

class SkillController extends Controller
{
    public SkillService $service;
    public function __construct(SkillService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=Skill::all();
        return view('admin.skills.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.skills.form');
    }

    public function store(SkillRequest $skillRequest)
    {
        $this->service->store($skillRequest);
        return redirect()->route('admin.skills.index')->with('success','Added successfully');
    }

    public function edit(Skill $skill)
    {

        return view('admin.skills.form',['model'=>$skill]);
    }

    public function update(SkillRequest $skillRequest ,Skill $skill)
    {
        $this->service->update($skillRequest,$skill);
        return redirect()->route('admin.skills.index')->with('success','Updated successfully !');
    }

    public function destroy(Skill $skill)
    {
        $this->service->delete($skill);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
