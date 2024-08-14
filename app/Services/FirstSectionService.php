<?php

namespace App\Services;




use App\Http\Requests\FirstSectionRequest;
use App\Models\FirstSection;
use App\Repositories\FirstSectionRepository;
use Illuminate\Support\Facades\Cache;


class FirstSectionService
{
    public function __construct(protected FirstSectionRepository $repository,protected FileUploadService $fileUploadService)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(FirstSectionRequest $firstSectionRequest)
    {
        $data = $firstSectionRequest->all();
        $data['image'] = $this->fileUploadService->uploadFile($firstSectionRequest->image, 'firstSection');
        unset($data['_token']);
        $model = FirstSection::create($data);
        self::clearCache();
        return $model;
    }

    public function update($request,$model)
    {
        $data = $request->all();
        if ($request->has('image')) {
            $data['image'] = $this->fileUploadService->replaceFile($request->image, $model->image, 'firstSection');
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
        Cache::forget('first_sections');
    }

    public function cachedFirstSection()
    {
        return Cache::rememberForever('first_sections',fn() => $this->repository->all());
    }




}
