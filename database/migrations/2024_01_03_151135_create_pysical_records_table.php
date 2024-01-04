<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('records_anecdotals', function (Blueprint $table) {
            $table->id();
            $table->binary('file');
            $table->string('student_name');
            $table->string('school_level');
            $table->string('grade_level');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE records_anecdotals MODIFY file MEDIUMBLOB");
        
        Schema::create('records_individual_inventory', function (Blueprint $table) {
            $table->id();
            $table->binary('file');
            $table->string('student_name');
            $table->string('school_level');
            $table->string('grade_level');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE records_individual_inventory MODIFY file MEDIUMBLOB");
        
        Schema::create('records_home_visitation_forms', function (Blueprint $table) {
            $table->id();
            $table->binary('file');
            $table->string('student_name');
            $table->string('school_level');
            $table->string('grade_level');
            $table->string('teacher_name');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE records_home_visitation_forms MODIFY file MEDIUMBLOB");
        
        Schema::create('records_violation_forms', function (Blueprint $table) {
            $table->id();
            $table->binary('file');
            $table->string('student_name');
            $table->string('school_level');
            $table->string('grade_level');
            $table->string('teacher_name');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE records_violation_forms MODIFY file MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records_anecdotals');
        Schema::dropIfExists('records_individual_inventory');
        Schema::dropIfExists('records_home_visitation_forms');
        Schema::dropIfExists('records_violation_forms');
    }
};
