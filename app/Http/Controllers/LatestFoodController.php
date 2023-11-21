<?php

namespace App\Http\Controllers;

use App\Services\FoodService;

class LatestFoodController extends Controller
{
    public function index(FoodService $foodService)
    {
        return $foodService->latestFoodList();
    }
}
