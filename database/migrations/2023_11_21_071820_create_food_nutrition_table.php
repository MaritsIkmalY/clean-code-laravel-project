<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('food_nutrition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_id')->constrained('food')->onDelete('cascade');
            $table->foreignId('nutrition_id')->constrained('nutrition')->onDelete('cascade');
            $table->double('amount');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('food_nutrition');
    }
};
