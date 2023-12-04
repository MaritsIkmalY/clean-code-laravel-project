<?php

namespace App\Http\Controllers;

use App\Data\NutritionData;
use App\Http\Requests\NutritionRequest;
use App\Models\Nutrition;
use App\Services\NutritionService;

class NutritionController extends Controller
{
    private $nutritionService;

    public function __construct(NutritionService $nutritionService)
    {
        $this->nutritionService = $nutritionService;
    }

    public function index()
    {
        return $this->nutritionService->index();
    }

    public function store(NutritionRequest $request)
    {
        return $this->nutritionService->create(NutritionData::fromRequest($request));
    }

    public function show(Nutrition $nutrition)
    {
        return $this->nutritionService->show($nutrition);
    }

    public function update(NutritionRequest $request, Nutrition $nutrition)
    {
        return $this->nutritionService->update(NutritionData::fromRequest($request), $nutrition);
    }

    public function destroy(Nutrition $nutrition)
    {
        return $this->nutritionService->destroy($nutrition);
    }
}
