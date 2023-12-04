<?php

namespace App\Data;

use Illuminate\Http\Request;

class FoodData
{
    private string $name;

    private string $description;

    private string $pros;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPros(string $pros)
    {
        $this->pros = $pros;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'pros' => $this->pros,
        ];
    }

    public static function fromRequest(Request $request)
    {
        $data = new FoodData();
        $data->setName($request->get('name'));
        $data->setDescription($request->get('description'));
        $data->setPros($request->get('pros'));

        return $data;
    }
}
