<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodNutrition extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id',
        'nutrition_id',
        'amount'
    ];

    public function food(): BelongsTo
    {
        return $this->belongsTo(Food::class);
    }

    public function nutrition(): BelongsTo
    {
        return $this->belongsTo(Nutrition::class);
    }
}
