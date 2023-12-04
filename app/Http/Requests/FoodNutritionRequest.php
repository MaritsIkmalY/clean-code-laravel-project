<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodNutritionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'amount' => 'required',
            'nutrition_id' => 'required',
            'food_id' => 'required',
        ];
    }
}
