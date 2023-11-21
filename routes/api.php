<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::resource('/food', FoodController::class);
});
