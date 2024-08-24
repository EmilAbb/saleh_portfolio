<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{

    public function rules(): array
    {
        $data = [
            'name' => 'required|string',
        ];
        return $data;
    }

}
