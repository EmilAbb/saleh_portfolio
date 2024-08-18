<?php

namespace App\Services;



use App\Http\Requests\SocialRequest;
use App\Models\Social;
use App\Repositories\SocialRepository;
use Illuminate\Support\Facades\Cache;


class SocialService
{
    public function __construct(protected SocialRepository $repository,protected FileUploadService $fileUploadService)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(SocialRequest $socialRequest)
    {
        $data = $socialRequest->all();
        $data['social_image'] = $this->fileUploadService->uploadFile($socialRequest->social_image, 'socials');
        unset($data['_token']);
        $model = Social::create($data);
        self::clearCache();
        return $model;
    }

    public function update($request,$model)
    {
        $data = $request->all();
        if ($request->has('social_image')) {
            $data['social_image'] = $this->fileUploadService->replaceFile($request->social_image, $model->social_image, 'socials');
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
        Cache::forget('socials');
    }

    public function cachedAbout()
    {
        return Cache::rememberForever('socials',fn() => $this->repository->all());
    }




}
