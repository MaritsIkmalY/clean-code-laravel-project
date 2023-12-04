<?php

namespace App\Data;

use Illuminate\Http\Request;

class FoodCompareData
{
    private string $foodName1;
    private string $foodName2;

    public function setFoodName1(string $foodName1)
    {
        $this->foodName1 = $foodName1;
    }

    public function setFoodName2(string $foodName2)
    {
        $this->foodName2 = $foodName2;
    }

    public function getFoodName1()
    {
        return $this->foodName1;
    }

    public function getFoodName2()
    {
        return $this->foodName2;
    }

    public static function fromRequest(Request $request)
    {
        $data = new FoodCompareData();
        $data->setFoodName1($request->get('foodName1'));
        $data->setFoodName2($request->get('foodName2'));
        return $data;
    }

}
