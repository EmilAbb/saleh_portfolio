<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VideoRequest extends FormRequest
{

    public function rules(): array
    {
        $data = [
            'video_name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'video_link' => 'required|string',
            'cover_photo' => [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
        ];
        return $data;
    }

}
