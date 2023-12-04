<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NutritionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nutrition_measurement_type_id' => 'required',
            'name' => 'required',
        ];
    }
}
