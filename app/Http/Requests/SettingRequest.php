<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SettingRequest extends FormRequest
{

    public function rules(): array
    {
        $data = [
            'phone' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'address_label' => 'required|string',
            'phone_label' => 'required|string',
            'email_label' => 'required|string',
            'logo' => [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
            'logo_second' => [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
            'email_image' => [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
            'phone_image' => [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
            'address_image' => [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
            'cv' => [
                'nullable',
                'file',
                'mimes:pdf'
            ],
        ];
        return $data;
    }

}
