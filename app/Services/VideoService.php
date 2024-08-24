<?php

namespace App\Services;




use App\Http\Requests\AboutRequest;
use App\Http\Requests\VideoRequest;
use App\Models\About;
use App\Models\Video;
use App\Repositories\AboutRepository;
use App\Repositories\AbstractRepository;
use App\Repositories\VideoRepository;
use Illuminate\Support\Facades\Cache;


class VideoService
{
    public function __construct(protected VideoRepository $repository,protected FileUploadService $fileUploadService)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(VideoRequest $videoRequest)
    {
        $data = $videoRequest->all();
        $data['cover_photo'] = $this->fileUploadService->uploadFile($videoRequest->cover_photo, 'videos');
        unset($data['_token']);
        $model = Video::create($data);
        self::clearCache();
        return $model;
    }

    public function update($request,$model)
    {
        $data = $request->all();
        if ($request->has('cover_photo')) {
            $data['cover_photo'] = $this->fileUploadService->replaceFile($request->cover_photo, $model->cover_photo, 'videos');
        }
        $model =  $this->repository->save($data,$model );
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
        Cache::forget('videos');
    }

    public function cachedVideo()
    {
        return Cache::rememberForever('videos',fn() => $this->repository->all());
    }




}
