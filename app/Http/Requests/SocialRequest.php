<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SocialRequest extends FormRequest
{

    public function rules(): array
    {
        $data = [
            'social_label' => 'required|string',
            'social' => 'required|string',
            'social_image' => [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
            'social_image_two' => [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
        ];
        return $data;
    }

}
