<?php

namespace App\Services;




use App\Http\Requests\AboutRequest;
use App\Http\Requests\SettingRequest;
use App\Models\About;
use App\Models\Setting;
use App\Repositories\AboutRepository;
use App\Repositories\AbstractRepository;
use App\Repositories\SettingRepository;
use Illuminate\Support\Facades\Cache;


class SettingService
{
    public function __construct(protected SettingRepository $repository,protected FileUploadService $fileUploadService)
    {

    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(5);
    }

    public function store(SettingRequest $settingRequest)
    {
        $data = $settingRequest->all();
        $data['logo'] = $this->fileUploadService->uploadFile($settingRequest->logo, 'settings');
        $data['logo_second'] = $this->fileUploadService->uploadFile($settingRequest->logo_second, 'settings');
        $data['phone_image'] = $this->fileUploadService->uploadFile($settingRequest->phone_image, 'settings');
        $data['email_image'] = $this->fileUploadService->uploadFile($settingRequest->email_image, 'settings');
        $data['address_image'] = $this->fileUploadService->uploadFile($settingRequest->address_image, 'settings');
        $data['cv'] = $this->fileUploadService->uploadFile($settingRequest->cv, 'settings');
        unset($data['_token']);
        $model = Setting::create($data);
        self::clearCache();
        return $model;
    }

    public function update($request,$model)
    {
        $data = $request->all();
        if ($request->has('logo')) {
            $data['logo'] = $this->fileUploadService->replaceFile($request->logo, $model->logo, 'setting');
        }
        if ($request->has('logo_second')) {
            $data['logo_second'] = $this->fileUploadService->replaceFile($request->logo_second, $model->logo_second, 'setting');
        }
        if ($request->has('email_image')) {
            $data['email_image'] = $this->fileUploadService->replaceFile($request->email_image, $model->email_image, 'setting');
        }
        if ($request->has('phone_image')) {
            $data['phone_image'] = $this->fileUploadService->replaceFile($request->phone_image, $model->phone_image, 'setting');
        }

        if ($request->has('address_image')) {
            $data['address_image'] = $this->fileUploadService->replaceFile($request->address_image, $model->address_image, 'setting');
        }
        if ($request->has('cv')) {
            $data['cv'] = $this->fileUploadService->replaceFile($request->cv, $model->cv, 'setting');
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
        Cache::forget('settings');
    }

    public function cachedAbout()
    {
        return Cache::rememberForever('settings',fn() => $this->repository->all());
    }




}
