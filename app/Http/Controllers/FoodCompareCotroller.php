<?php

namespace App\Http\Controllers;

use App\Data\FoodCompareData;
use App\Http\Requests\FoodCompareRequest;
use App\Services\FoodCompareService;

class FoodCompareCotroller extends Controller
{
    private $foodCompareService;

    public function __construct(FoodCompareService $foodCompareService)
    {
        $this->foodCompareService = $foodCompareService;
    }

    public function index(FoodCompareRequest $request)
    {
        return $this->foodCompareService->index(FoodCompareData::fromRequest($request));
    }
}
