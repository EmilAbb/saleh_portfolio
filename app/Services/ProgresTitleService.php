<?php

namespace App\Services;


use App\Http\Requests\MenuRequest;
use App\Http\Requests\ProgresTitleRequest;
use App\Models\Menu;
use App\Models\ProgresTitle;
use App\Repositories\MenuRepository;

use App\Repositories\ProgresTitleRepository;
use Illuminate\Support\Facades\Cache;


class ProgresTitleService
{
    public function __construct(protected ProgresTitleRepository $repository)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(ProgresTitleRequest $progresTitleRequest)
    {
        $data = $progresTitleRequest->all();
        unset($data['_token']);
        $model = ProgresTitle::create($data);
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
        Cache::forget('progress_titles');
    }

    public function cachedProgressTitle()
    {
        return Cache::rememberForever('progress_titles',fn() => $this->repository->all());
    }





}
