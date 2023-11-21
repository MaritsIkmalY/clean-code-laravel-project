<?php

namespace App\Data;

use Illuminate\Http\Request;

class NutritionMeasurementTypeData
{
    private string $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
        ];
    }

    public static function fromRequest(Request $request)
    {
        $data = new NutritionMeasurementTypeData();
        $data->setName($request->get('name'));
        return $data;
    }
}
