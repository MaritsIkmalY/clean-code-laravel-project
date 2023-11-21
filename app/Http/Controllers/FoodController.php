<?php

namespace App\Http\Controllers;

use App\Data\FoodData;
use App\Http\Requests\FoodRequest;
use App\Models\Food;
use App\Services\FoodService;

class FoodController extends Controller
{
    private $foodService;

    public function __construct(FoodService $foodService)
    {
        $this->foodService = $foodService;
    }

    public function index()
    {
        return $this->foodService->index();
    }

    public function store(FoodRequest $request)
    {
        return $this->foodService->create(FoodData::fromRequest($request));
    }

    public function show(Food $food)
    {
        return $this->foodService->show($food);
    }

    public function update(FoodRequest $request, Food $food)
    {
        return $this->foodService->update(FoodData::fromRequest($request), $food);
    }

    public function destroy(Food $food)
    {
        return $this->foodService->destroy($food);
    }
}
