<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodNutritionController;
use App\Http\Controllers\LatestFoodController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\NutritionMeasurementTypeController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::resource('/food', FoodController::class);
    Route::resource('/nutrition-measurement-type', NutritionMeasurementTypeController::class);
    Route::resource('/nutrition', NutritionController::class);
    Route::resource('/food-nutrition', FoodNutritionController::class);
    Route::get('/latest/food', [LatestFoodController::class, 'index']);
});
