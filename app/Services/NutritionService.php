<?php

namespace App\Services;

use App\Data\NutritionData;
use App\Http\Resources\NutritionResource;
use App\Models\Nutrition;

class NutritionService
{
    public function index()
    {
        $nutrition = Nutrition::paginate(10);

        return NutritionResource::collection($nutrition);
    }

    public function show(Nutrition $nutrition)
    {
        return NutritionResource::make($nutrition);
    }

    public function create(NutritionData $nutritionData)
    {
        $nutrition = Nutrition::create($nutritionData->toArray());

        return $this->createNutritionResponse($nutrition, 'Nutrition created successfully');
    }

    public function update(NutritionData $nutritionData, Nutrition $nutrition)
    {
        $nutrition->update($nutritionData->toArray());

        return $this->createNutritionResponse($nutrition, 'Nutrition updated successfully');
    }

    public function destroy(Nutrition $nutrition)
    {
        $nutrition->delete();

        return $this->createNutritionResponse($nutrition, 'Nutrition deleted successfully');
    }

    protected function createNutritionResponse(Nutrition $nutrition, string $message)
    {
        return NutritionResource::make($nutrition)
        ->additional(['message' => $message])
        ->response();
    }
}
