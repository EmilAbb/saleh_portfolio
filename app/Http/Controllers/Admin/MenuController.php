<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public MenuService $service;
    public function __construct(MenuService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $models=Menu::all();
        return view('admin.menus.index',['models'=>$models]);
    }

    public function create()
    {

        return view('admin.menus.form');
    }

    public function store(MenuRequest $menuRequest)
    {
        $this->service->store($menuRequest);
        return redirect()->route('admin.menus.index')->with('success','Added successfully');
    }

    public function edit(Menu $menu)
    {

        return view('admin.menus.form',['model'=>$menu]);
    }

    public function update(MenuRequest $menuRequest ,Menu $menu)
    {
        $this->service->update($menuRequest,$menu);
        return redirect()->route('admin.menus.index')->with('success','Updated successfully !');
    }

    public function destroy(Menu $menu)
    {
        $this->service->delete($menu);
        return redirect()->back()->with('success','Deleted successfully');
    }
}
