<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodWithNutritionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'pros' => $this->pros,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->created_at->diffForHumans(),
            'nutrition' => $this->foodNutrition
                ->sortBy('nutrition.id')
                ->values()
                ->map(function ($nutrition) {
                    return [
                        'id' => $nutrition->nutrition->id,
                        'name' => $nutrition->nutrition->name,
                        'amount' => $nutrition->amount,
                        'nutrition_measurement_type_name' => $nutrition->nutrition->nutritionMeasurementType->name,
                    ];
                }),
        ];
    }
}
