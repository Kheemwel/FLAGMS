<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('food_name');
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('nutritions_id');
            $table->foreign('categories_id')->references('id')->on('food_categories');
            $table->foreign('nutritions_id')->references('id')->on('food_nutritions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
