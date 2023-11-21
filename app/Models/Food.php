<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'pros'
    ];

    public function foodNutrition(): HasMany
    {
        return $this->hasMany(FoodNutrition::class);
    }
}
