<?php

namespace App\Http\Controllers;

use App\Data\FoodNutritionData;
use App\Http\Requests\FoodNutritionRequest;
use App\Models\FoodNutrition;
use App\Services\FoodNutritionService;

class FoodNutritionController extends Controller
{
    private $foodNutritionService;

    public function __construct(FoodNutritionService $foodNutritionService)
    {
        $this->foodNutritionService = $foodNutritionService;
    }

    public function index()
    {
        return $this->foodNutritionService->index();
    }

    public function store(FoodNutritionRequest $request)
    {
        return $this->foodNutritionService->create(FoodNutritionData::fromRequest($request));
    }

    public function show(FoodNutrition $foodNutrition)
    {
        return $this->foodNutritionService->show($foodNutrition);
    }

    public function update(FoodNutritionRequest $request, FoodNutrition $foodNutrition)
    {
        return $this->foodNutritionService->update(FoodNutritionData::fromRequest($request), $foodNutrition);
    }

    public function destroy(FoodNutrition $foodNutrition)
    {
        return $this->foodNutritionService->destroy($foodNutrition);
    }
}
