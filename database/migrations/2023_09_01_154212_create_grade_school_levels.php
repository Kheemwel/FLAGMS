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
        Schema::create('grade_school_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_level_id');
            $table->unsignedBigInteger('grade_level_id');
            $table->foreign('school_level_id')->references('id')->on('school_levels');
            $table->foreign('grade_level_id')->references('id')->on('grade_levels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_school_levels');
    }
};
