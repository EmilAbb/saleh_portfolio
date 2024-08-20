<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactMeRequest extends FormRequest
{

    public function rules(): array
    {
        $data = [
            'title' => 'required|string',
            'button_text' => 'required|string',
        ];
        return $data;
    }

}
