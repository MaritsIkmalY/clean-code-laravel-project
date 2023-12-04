<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nutrition extends Model
{
    use HasFactory;

    protected $fillable = [
        'nutrition_measurement_type_id',
        'name',
    ];

    public function nutritionMeasurementType(): BelongsTo
    {
        return $this->belongsTo(NutritionMeasurementType::class);
    }

    public function foodNutrition(): HasMany
    {
        return $this->hasMany(FoodNutrition::class);
    }
}
