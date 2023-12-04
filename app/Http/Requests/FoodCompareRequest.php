<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodCompareRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'foodName1' => 'required|string',
            'foodName2' => 'required|string',
        ];
    }
}
