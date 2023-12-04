<?php

namespace App\Services;

use App\Data\FoodNutritionData;
use App\Http\Resources\FoodNutritionResource;
use App\Models\FoodNutrition;

class FoodNutritionService
{
    public function index()
    {
        $foodNutrition = FoodNutrition::paginate(10);

        return FoodNutritionResource::collection($foodNutrition);
    }

    public function show(FoodNutrition $foodNutrition)
    {
        return FoodNutritionResource::make($foodNutrition);
    }

    public function create(FoodNutritionData $foodNutritionData)
    {
        $foodNutrition = FoodNutrition::create($foodNutritionData->toArray());

        return $this->createFoodNutritionResponse($foodNutrition, 'Food Nutrition created successfully');
    }

    public function update(FoodNutritionData $foodNutritionData, FoodNutrition $foodNutrition)
    {
        $foodNutrition->update($foodNutritionData->toArray());

        return $this->createFoodNutritionResponse($foodNutrition, 'Food Nutrition updated successfully');
    }

    public function destroy(FoodNutrition $foodNutrition)
    {
        $foodNutrition->delete();

        return $this->createFoodNutritionResponse($foodNutrition, 'Food Nutrition deleted successfully');
    }

    protected function createFoodNutritionResponse(FoodNutrition $foodNutrition, string $message)
    {
        return FoodNutritionResource::make($foodNutrition)
        ->additional(['message' => $message])
        ->response();
    }
}
