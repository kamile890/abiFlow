<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'developer' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'price' => 'nullable|numeric|min:0',
            'released_at' => 'nullable|date',
            'description' => 'nullable|string',
        ];
    }
}
