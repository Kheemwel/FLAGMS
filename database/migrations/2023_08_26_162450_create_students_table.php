<?php

use App\Models\GradeLevels;
use App\Models\GradeSchoolLevels;
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

        Schema::create('grade_school_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_level_id');
            $table->unsignedBigInteger('grade_level_id');
            $table->foreign('school_level_id')->references('id')->on('school_levels')->cascadeOnDelete();
            $table->foreign('grade_level_id')->references('id')->on('grade_levels')->cascadeOnDelete();
            $table->timestamps();
        });

        // Retrieve the school levels and grade levels IDs
        $juniorHighSchoolId = SchoolLevels::where('school_level', 'Junior High School')->value('id');
        $seniorHighSchoolId = SchoolLevels::where('school_level', 'Senior High School')->value('id');

        $grade7Id = GradeLevels::where('grade_level', 7)->value('id');
        $grade8Id = GradeLevels::where('grade_level', 8)->value('id');
        $grade9Id = GradeLevels::where('grade_level', 9)->value('id');
        $grade10Id = GradeLevels::where('grade_level', 10)->value('id');
        $grade11Id = GradeLevels::where('grade_level', 11)->value('id');
        $grade12Id = GradeLevels::where('grade_level', 12)->value('id');

        // Insert data into the pivot table
        GradeSchoolLevels::insert([
            [
                'school_level_id' => $juniorHighSchoolId,
                'grade_level_id' => $grade7Id,
            ],
            [
                'school_level_id' => $juniorHighSchoolId,
                'grade_level_id' => $grade8Id,
            ],
            [
                'school_level_id' => $juniorHighSchoolId,
                'grade_level_id' => $grade9Id,
            ],
            [
                'school_level_id' => $juniorHighSchoolId,
                'grade_level_id' => $grade10Id,
            ],
            [
                'school_level_id' => $seniorHighSchoolId,
                'grade_level_id' => $grade11Id,
            ],
            [
                'school_level_id' => $seniorHighSchoolId,
                'grade_level_id' => $grade12Id,
            ],
        ]);

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('lrn', 12)->unique();
            $table->unsignedBigInteger('user_account_id');
            $table->unsignedBigInteger('school_level_id');
            $table->unsignedBigInteger('grade_level_id');
            $table->foreign('user_account_id')->references('id')->on('user_accounts')->cascadeOnDelete();
            $table->foreign('school_level_id')->references('id')->on('school_levels')->cascadeOnDelete();
            $table->foreign('grade_level_id')->references('id')->on('grade_levels')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_levels');
        Schema::dropIfExists('grade_levels');
        Schema::dropIfExists('grade_school_levels');
        Schema::dropIfExists('students');
    }
};
