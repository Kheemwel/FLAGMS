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
        Schema::create('request_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->string('form_type');
            $table->boolean('is_approve')->default(false);
            $table->foreign('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('request_home_visitation_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_form_id');
            $table->unsignedBigInteger('student_id');
            $table->text('reason');
            $table->foreign('request_form_id')->references('id')->on('request_forms')->cascadeOnDelete();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('request_violation_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_form_id');
            $table->string('offense_type');
            $table->foreign('request_form_id')->references('id')->on('request_forms')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('request_violation_forms_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_violation_form_id');
            $table->unsignedBigInteger('student_id');
        
            // Specify a custom name for the foreign key constraint
            $table->foreign('request_violation_form_id', 'fk_request_violation_forms_students')->references('id')->on('request_violation_forms')->cascadeOnDelete();
            $table->foreign('student_id', 'fk_students')->references('id')->on('students')->cascadeOnDelete();
            
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_violation_forms_students');
        Schema::dropIfExists('request_violation_forms');
        Schema::dropIfExists('request_home_visitation_forms');
        Schema::dropIfExists('request_forms');
    }
};
