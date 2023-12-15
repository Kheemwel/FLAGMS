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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('guidance_id');
            $table->string('form_type');
            $table->string('status')->default('INCOMPLETE');
            $table->foreign('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();
            $table->foreign('guidance_id')->references('id')->on('guidance')->cascadeOnDelete();
            $table->timestamps();
        });

        
        Schema::create('home_visitation_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('student_signature_id')->nullable();
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('parent_signature_id')->nullable();
            $table->unsignedBigInteger('teacher_signature_id')->nullable();
            $table->unsignedBigInteger('guidance_signature_id')->nullable();
            $table->unsignedBigInteger('junior_principal_id');
            $table->unsignedBigInteger('junior_principal_signature_id')->nullable();
            $table->unsignedBigInteger('senior_principal_id');
            $table->unsignedBigInteger('senior_principal_signature_id')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('guidance_name')->nullable();
            $table->string('teacher_name')->nullable();
            $table->string('junior_principal_name')->nullable();
            $table->string('senior_principal_name')->nullable();
            $table->string('student_name')->nullable();
            $table->string('student_surname')->nullable();
            $table->string('student_firstname')->nullable();
            $table->string('student_middlename')->nullable();
            $table->string('student_no')->nullable();
            $table->string('lrn')->nullable();
            $table->string('level_section')->nullable();
            $table->string('address')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('age')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_contact')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_contact')->nullable();
            $table->string('reason')->nullable();
            $table->date('visitation_date')->nullable();
            $table->string('place')->nullable();
            $table->string('remark')->nullable();
            $table->foreign('form_id')->references('id')->on('forms')->cascadeOnDelete();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
            $table->foreign('parent_id')->references('id')->on('parents')->cascadeOnDelete();
            $table->foreign('junior_principal_id')->references('id')->on('principals')->cascadeOnDelete();
            $table->foreign('senior_principal_id')->references('id')->on('principals')->cascadeOnDelete();
            $table->foreign('student_signature_id')->references('id')->on('student_home_visitation_signatures')->cascadeOnDelete();
            $table->foreign('parent_signature_id')->references('id')->on('parent_form_signatures')->cascadeOnDelete();
            $table->foreign('teacher_signature_id')->references('id')->on('teacher_form_signatures')->cascadeOnDelete();
            $table->foreign('guidance_signature_id')->references('id')->on('guidance_form_signatures')->cascadeOnDelete();
            $table->foreign('junior_principal_signature_id')->references('id')->on('junior_principal_signatures')->cascadeOnDelete();
            $table->foreign('senior_principal_signature_id')->references('id')->on('senior_principal_signatures')->cascadeOnDelete();
            $table->timestamps();
        });

        
        Schema::create('violation_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->string('offense_type')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->text('action_taken')->nullable();
            $table->text('case_status')->nullable();
            $table->text('recommendation')->nullable();
            $table->string('teacher_name');
            $table->foreign('form_id')->references('id')->on('forms')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('violation_forms_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('violation_forms_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('student_signature_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('level_section')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('parent')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->text('narrative')->nullable();
            $table->foreign('violation_forms_id')->references('id')->on('violation_forms')->cascadeOnDelete();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
            $table->foreign('student_signature_id')->references('id')->on('student_violation_signatures')->cascadeOnDelete();
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
        Schema::dropIfExists('home_visitation_forms');
        Schema::dropIfExists('forms');
    }
};
