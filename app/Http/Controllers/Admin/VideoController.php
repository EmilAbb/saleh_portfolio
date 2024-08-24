<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\VideoRequest;
use App\Models\About;
use App\Models\Category;
use App\Models\Video;
use App\Services\AboutService;
use App\Services\CategoryService;
use App\Services\VideoService;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public VideoService $service;
    public function __construct(VideoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=Video::all();
        return view('admin.videos.index',['models'=>$models]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.videos.form',compact('categories'));
    }

    public function store(VideoRequest $videoRequest)
    {
        $this->service->store($videoRequest);
        return redirect()->route('admin.videos.index')->with('success','Added successfully');
    }

    public function edit(Video $video)
    {
        $categories = Category::all();
        return view('admin.videos.form',['model'=>$video,'categories' => $categories]);
    }

    public function update(VideoRequest $videoRequest ,Video $video)
    {
        $this->service->update($videoRequest,$video);
        return redirect()->route('admin.videos.index')->with('success','Updated successfully !');
    }

    public function destroy(Video $video)
    {
        $this->service->delete($video);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
