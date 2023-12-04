<?php

namespace App\Services;

use App\Data\NutritionMeasurementTypeData;
use App\Http\Resources\NutritionMeasurementTypeResource;
use App\Models\NutritionMeasurementType;

class NutritionMeasurementTypeService
{
    public function index()
    {
        $nutritionMeasurementType = NutritionMeasurementType::paginate(10);

        return NutritionMeasurementTypeResource::collection($nutritionMeasurementType);
    }

    public function show(NutritionMeasurementType $nutritionMeasurementType)
    {
        return NutritionMeasurementTypeResource::make($nutritionMeasurementType);
    }

    public function create(NutritionMeasurementTypeData $nutritionMeasurementTypeData)
    {
        $nutritionMeasurementType = NutritionMeasurementType::create($nutritionMeasurementTypeData->toArray());

        return $this->createNutritionMeasurementTypeResponse(
            $nutritionMeasurementType,
            'Nutrition measurement type created successfully'
        );
    }

    public function update(
        NutritionMeasurementTypeData $nutritionMeasurementTypeData,
        NutritionMeasurementType $nutritionMeasurementType
    ) {
        $nutritionMeasurementType->update($nutritionMeasurementTypeData->toArray());

        return $this->createNutritionMeasurementTypeResponse(
            $nutritionMeasurementType,
            'Nutrition measurement type updated successfully'
        );
    }

    public function destroy(NutritionMeasurementType $nutritionMeasurementType)
    {
        $nutritionMeasurementType->delete();

        return $this->createNutritionMeasurementTypeResponse(
            $nutritionMeasurementType,
            'Nutrition measurement type deleted successfully'
        );
    }

    protected function createNutritionMeasurementTypeResponse(
        NutritionMeasurementType $nutritionMeasurementType,
        string $message
    ) {
        return NutritionMeasurementTypeResource::make($nutritionMeasurementType)
            ->additional(['message' => $message])
            ->response();
    }
}
