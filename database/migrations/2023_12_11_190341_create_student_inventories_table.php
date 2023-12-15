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
        Schema::create('student_individual_inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix_name')->nullable();
            $table->string('lrn', 12)->nullable();
            $table->string('gender');
            $table->string('status');
            $table->string('citizenship');
            $table->date('birthday');
            $table->string('birth_place');
            $table->string('religion');

            $table->string('father_name');
            $table->string('father_contact');
            $table->string('mother_name');
            $table->string('mother_contact');
            $table->string('guardian_name');
            $table->string('guardian_contact');

            $table->string('street_no');
            $table->string('street');
            $table->string('subdivision');
            $table->string('barangay');
            $table->string('city');
            $table->string('province');
            $table->string('zipcode', 4);

            
            $table->string('tel_no')->nullable();
            $table->string('mobile_no');
            $table->string('email');

            
            $table->string('primary_school');
            $table->string('primary_start');
            $table->string('primary_end');
            $table->string('junior_school');
            $table->string('junior_start');
            $table->string('junior_end');

            
            $table->text('medical_conditions')->nullable();
            $table->text('allergies')->nullable();

            
            $table->string('emergency_first_name');
            $table->string('emergency_last_name');
            $table->string('emergency_contact');
            $table->string('emergency_relationship');

            
            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_individual_inventories');
    }
};
