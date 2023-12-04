<?php

namespace App\Services;

use App\Data\FoodCompareData;
use App\Data\FoodComparisonData;
use App\Http\Resources\FoodCompareResource;
use App\Models\Food;

class FoodCompareService
{
    public function index(FoodCompareData $foodCompareData)
    {
        $food1 = $this->getFoodByName($foodCompareData->getFoodName1());
        $food2 = $this->getFoodByName($foodCompareData->getFoodName2());

        return FoodCompareResource::make(FoodComparisonData::fromCompareService($food1, $food2));
    }

    public function getFoodByName(string $foodName)
    {
        return Food::whereName($foodName)
        ->with('foodNutrition.nutrition.nutritionMeasurementType')->first();
    }
}
