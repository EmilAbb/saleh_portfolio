<?php

namespace App\Services;


use App\Http\Requests\ContactMeRequest;
use App\Http\Requests\MenuRequest;
use App\Models\ContactMe;
use App\Models\Menu;
use App\Repositories\ContactMeRepository;
use App\Repositories\MenuRepository;

use Illuminate\Support\Facades\Cache;


class ContactMeService
{
    public function __construct(protected ContactMeRepository $repository)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(ContactMeRequest $contactMeRequest)
    {
        $data = $contactMeRequest->all();
        unset($data['_token']);
        $model = ContactMe::create($data);
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
        Cache::forget('contact_me');
    }

    public function cachedContactMe()
    {
        return Cache::rememberForever('contact_me',fn() => $this->repository->all());
    }





}
