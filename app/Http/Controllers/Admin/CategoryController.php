<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\MenuRequest;
use App\Models\Category;
use App\Models\Menu;
use App\Services\CategoryService;
use App\Services\MenuService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public CategoryService $service;
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=Category::all();
        return view('admin.categories.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.categories.form');
    }

    public function store(CategoryRequest $categoryRequest)
    {
        $this->service->store($categoryRequest);
        return redirect()->route('admin.categories.index')->with('success','Added successfully');
    }

    public function edit(Category $category)
    {

        return view('admin.categories.form',['model'=>$category]);
    }

    public function update(CategoryRequest $categoryRequest ,Category $category)
    {
        $this->service->update($categoryRequest,$category);
        return redirect()->route('admin.categories.index')->with('success','Updated successfully !');
    }

    public function destroy(Category $category)
    {
        $this->service->delete($category);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
