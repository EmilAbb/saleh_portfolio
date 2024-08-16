<?php

namespace App\Services;


use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use App\Repositories\SkillRepository;
use Illuminate\Support\Facades\Cache;


class SkillService
{
    public function __construct(protected SkillRepository $repository)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(SkillRequest $skillRequest)
    {
        $data = $skillRequest->all();
        unset($data['_token']);
        $model = Skill::create($data);
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
        Cache::forget('skills');
    }

    public function cachedMenu()
    {
        return Cache::rememberForever('skills',fn() => $this->repository->all());
    }





}
