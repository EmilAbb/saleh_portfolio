<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SkillRequest extends FormRequest
{

    public function rules(): array
    {
        $data = [
            'skill_name' => 'required|string',
            'skill_percent' => 'nullable|string',
            'featured' => 'nullable',
        ];
        return $data;
    }

}
