<?php

namespace App\Services;




use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Repositories\AboutRepository;
use App\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Cache;


class AboutService
{
    public function __construct(protected AboutRepository $repository,protected FileUploadService $fileUploadService)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(AboutRequest $aboutRequest)
    {
        $data = $aboutRequest->all();
        $data['image'] = $this->fileUploadService->uploadFile($aboutRequest->image, 'about');
        unset($data['_token']);
        $model = About::create($data);
        self::clearCache();
        return $model;
    }

    public function update($request,$model)
    {
        $data = $request->all();
        if ($request->has('image')) {
            $data['image'] = $this->fileUploadService->replaceFile($request->image, $model->image, 'about');
        }
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
        Cache::forget('abouts');
    }

    public function cachedAbout()
    {
        return Cache::rememberForever('abouts',fn() => $this->repository->all());
    }




}
