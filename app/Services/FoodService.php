<?php

namespace App\Services;

use App\Data\FoodData;
use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodWithNutritionResource;
use App\Models\Food;

class FoodService
{
    public function index()
    {
        $food = Food::paginate(10);

        return FoodResource::collection($food);
    }

    public function show(Food $food)
    {
        $food = Food::whereId($food->id)->with('foodNutrition.nutrition.nutritionMeasurementType')->first();

        return FoodWithNutritionResource::make($food);
    }

    public function create(FoodData $foodData)
    {
        $food = Food::create($foodData->toArray());

        return $this->createFoodResponse($food, 'Food created successfully');
    }

    public function update(FoodData $foodData, Food $food)
    {
        $food->update($foodData->toArray());

        return $this->createFoodResponse($food, 'Food updated successfully');
    }

    public function destroy(Food $food)
    {
        $food->delete();

        return $this->createFoodResponse($food, 'Food deleted successfully');
    }

    public function latestFoodList()
    {
        $food = Food::latest()->paginate(10);

        return FoodResource::collection($food);
    }

    protected function createFoodResponse(Food $food, string $message)
    {
        return FoodResource::make($food)
        ->additional(['message' => $message])
        ->response();
    }
}
