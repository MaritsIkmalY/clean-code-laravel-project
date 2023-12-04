<?php

namespace App\Data;

use App\Models\Food;

class FoodComparisonData
{
    private Food $food1;

    private Food $food2;

    public function setFood1(Food $food1)
    {
        $this->food1 = $food1;
    }

    public function setFood2(Food $food2)
    {
        $this->food2 = $food2;
    }

    public function getFood1()
    {
        return $this->food1;
    }

    public function getFood2()
    {
        return $this->food2;
    }

    public function foodToArray(Food $food): array
    {
        return [
            'id' => $food->id,
            'name' => $food->name,
            'description' => $food->description,
            'pros' => $food->pros,
            'created_at' => $food->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $food->created_at->format('Y-m-d H:i:s'),
            'nutrition' => $food->foodNutrition
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

    public static function fromCompareService(Food $food1, Food $food2)
    {
        $data = new FoodComparisonData();
        $data->setFood1($food1);
        $data->setFood2($food2);

        return $data;
    }
}
