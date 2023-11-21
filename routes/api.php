<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\NutritionMeasurementTypeController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::resource('/food', FoodController::class);
    Route::resource('/nutrition-measurement-type', NutritionMeasurementTypeController::class);
    Route::resource('/nutrition', NutritionController::class);
});
