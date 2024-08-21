<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TouchRequest extends FormRequest
{

    public function rules(): array
    {
        $data = [
            'title' => 'required|string',
            'text' => 'required|string',
        ];
        return $data;
    }

}
