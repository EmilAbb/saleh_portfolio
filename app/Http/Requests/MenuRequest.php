<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MenuRequest extends FormRequest
{

    public function rules(): array
    {
        $data = [
            'menu' => 'required|string',
            'href' => 'required|string',
        ];
        return $data;
    }

}
