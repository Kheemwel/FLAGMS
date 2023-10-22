<?php

use App\Models\GradeLevels;
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
            $table->foreign('school_level_id')->references('id')->on('school_levels');
            $table->foreign('grade_level_id')->references('id')->on('grade_levels');
            $table->timestamps();
        });

        $junior_highschool = SchoolLevels::find(1);
        $senior_highschool = SchoolLevels::find(2);

        if ($junior_highschool) {
            $grade7 = GradeLevels::find(1);
            $grade8 = GradeLevels::find(2);
            $grade9 = GradeLevels::find(3);
            $grade10 = GradeLevels::find(4);

            if ($grade7) {
                $junior_highschool->gradeLevels()->attach($grade7);
            }
            if ($grade8) {
                $junior_highschool->gradeLevels()->attach($grade8);
            }
            if ($grade9) {
                $junior_highschool->gradeLevels()->attach($grade9);
            }
            if ($grade10) {
                $junior_highschool->gradeLevels()->attach($grade10);
            }
        }

        if ($senior_highschool) {
            $grade11 = GradeLevels::find(5);
            $grade12 = GradeLevels::find(6);

            if ($grade11) {
                $senior_highschool->gradeLevels()->attach($grade11);
            }
            if ($grade12) {
                $senior_highschool->gradeLevels()->attach($grade12);
            }
        }

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('lrn', 12)->unique();
            $table->unsignedBigInteger('user_account_id');
            $table->unsignedBigInteger('school_level_id');
            $table->unsignedBigInteger('grade_level_id');
            $table->foreign('user_account_id')->references('id')->on('user_accounts');
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
        Schema::dropIfExists('school_levels');
        Schema::dropIfExists('grade_levels');
        Schema::dropIfExists('grade_school_levels');
        Schema::dropIfExists('students');
    }
};
