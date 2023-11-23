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
        Schema::create('violation_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->string('offense_type');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->text('action_taken')->nullable();
            $table->text('case_status')->nullable();
            $table->text('recommendation')->nullable();
            $table->foreign('form_id')->references('id')->on('forms')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('violation_forms_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('violation_forms_id');
            $table->unsignedBigInteger('student_id');
            $table->text('narrative')->nullable();
            $table->foreign('violation_forms_id')->references('id')->on('violation_forms')->cascadeOnDelete();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('violation_forms_students');
        Schema::dropIfExists('violation_forms');
    }
};
