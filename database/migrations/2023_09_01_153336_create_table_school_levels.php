<?php

use App\Models\SchoolLevels;
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
        Schema::create('school_levels', function (Blueprint $table) {
            $table->id();
            $table->string('school_level')->unique();
            $table->timestamps();
        });

        // Insert data after the table created
        SchoolLevels::insert([
            [
                'school_level' => 'Junior High School'
            ],
            [
                'school_level' => 'Senior High School'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_levels');
    }
};
