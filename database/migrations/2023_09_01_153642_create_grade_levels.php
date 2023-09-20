<?php

use App\Models\GradeLevels;
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
        Schema::create('grade_levels', function (Blueprint $table) {
            $table->id();
            $table->integer('grade_level')->unique();
            $table->timestamps();
        });

        // Insert data after the table created
        GradeLevels::insert([
            [
                'grade_level' => 7
            ],
            [
                'grade_level' => 8
            ],
            [
                'grade_level' => 9
            ],
            [
                'grade_level' => 10
            ],
            [
                'grade_level' => 11
            ],
            [
                'grade_level' => 12
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_levels');
    }
};
