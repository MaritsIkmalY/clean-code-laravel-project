<?php

namespace App\Data;

use Illuminate\Http\Request;

class NutritionData
{
    private string $name;

    private int $nutritionMeasurementTypeId;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setNutritionMeasurementTypeId(int $nutritionMeasurementTypeId)
    {
        $this->nutritionMeasurementTypeId = $nutritionMeasurementTypeId;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'nutrition_measurement_type_id' => $this->nutritionMeasurementTypeId,
        ];
    }

    public static function fromRequest(Request $request)
    {
        $data = new NutritionData();
        $data->setName($request->get('name'));
        $data->setNutritionMeasurementTypeId($request->get('nutrition_measurement_type_id'));

        return $data;
    }
}
