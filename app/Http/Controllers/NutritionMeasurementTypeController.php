<?php

namespace App\Http\Controllers;

use App\Data\NutritionMeasurementTypeData;
use App\Http\Requests\NutritionMeasurementTypeRequest;
use App\Models\NutritionMeasurementType;
use App\Services\NutritionMeasurementTypeService;

class NutritionMeasurementTypeController extends Controller
{
    private $nutritionMeasurementTypeService;

    public function __construct(NutritionMeasurementTypeService $nutritionMeasurementTypeService)
    {
        $this->nutritionMeasurementTypeService = $nutritionMeasurementTypeService;
    }

    public function index()
    {
        return $this->nutritionMeasurementTypeService->index();
    }

    public function store(NutritionMeasurementTypeRequest $request)
    {
        return $this->nutritionMeasurementTypeService
            ->create(NutritionMeasurementTypeData::fromRequest($request));
    }

    public function show(NutritionMeasurementType $nutritionMeasurementType)
    {
        return $this->nutritionMeasurementTypeService
            ->show($nutritionMeasurementType);
    }

    public function update(NutritionMeasurementTypeRequest $request, NutritionMeasurementType $nutritionMeasurementType)
    {
        return $this->nutritionMeasurementTypeService
            ->update(NutritionMeasurementTypeData::fromRequest($request), $nutritionMeasurementType);
    }

    public function destroy(NutritionMeasurementType $nutritionMeasurementType)
    {
        return $this->nutritionMeasurementTypeService
            ->destroy($nutritionMeasurementType);
    }
}
