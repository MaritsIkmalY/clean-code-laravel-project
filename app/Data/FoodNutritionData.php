<?php

namespace App\Data;

use Illuminate\Http\Request;

class FoodNutritionData
{
    private float $amount;

    private int $nutritionId;

    private int $foodId;

    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }

    public function setNutritionId(int $nutritionId)
    {
        $this->nutritionId = $nutritionId;
    }

    public function setFoodId(int $foodId)
    {
        $this->foodId = $foodId;
    }

    public function toArray()
    {
        return [
            'amount' => $this->amount,
            'nutrition_id' => $this->nutritionId,
            'food_id' => $this->foodId,
        ];
    }

    public static function fromRequest(Request $request)
    {
        $data = new FoodNutritionData();
        $data->setAmount($request->get('amount'));
        $data->setNutritionId($request->get('nutrition_id'));
        $data->setFoodId($request->get('food_id'));

        return $data;
    }
}
