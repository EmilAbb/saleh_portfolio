<?php

namespace App\Services;


use App\Http\Requests\MenuRequest;
use App\Http\Requests\TouchRequest;
use App\Models\Menu;
use App\Models\Touch;
use App\Repositories\MenuRepository;

use App\Repositories\TouchRepository;
use Illuminate\Support\Facades\Cache;


class TouchService
{
    public function __construct(protected TouchRepository $repository)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(TouchRequest $touchRequest)
    {
        $data = $touchRequest->all();
        unset($data['_token']);
        $model = Touch::create($data);
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
        Cache::forget('touchs');
    }

    public function cachedTouch()
    {
        return Cache::rememberForever('touchs',fn() => $this->repository->all());
    }





}
