<?php

namespace App\Services;


use App\Http\Requests\CategoryRequest;
use App\Http\Requests\MenuRequest;
use App\Models\Category;
use App\Models\Menu;
use App\Repositories\CategoryRepository;
use App\Repositories\MenuRepository;

use Illuminate\Support\Facades\Cache;


class CategoryService
{
    public function __construct(protected CategoryRepository $repository)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(CategoryRequest $categoryRequest)
    {
        $data = $categoryRequest->all();
        unset($data['_token']);
        $model = Category::create($data);
        self::clearCache();
        return $model;
    }

    public function update($request,$model)
    {
        $data = $request->all();
        $model =   $this->repository->save($data,$model );
        self::clearCache();
        return $model;
    }


    public function delete($model)
    {
        self::clearCache();
        return $this->repository->delete($model);
    }

    public static function clearCache()
    {
        Cache::forget('categories');
    }

    public function cachedCategory()
    {
        return Cache::rememberForever('categories',fn() => $this->repository->all());
    }





}
