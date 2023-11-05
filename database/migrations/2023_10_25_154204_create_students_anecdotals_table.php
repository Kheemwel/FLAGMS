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
        Schema::create('students_anecdotals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('offense_id');
            $table->unsignedBigInteger('disciplinary_action_id');
            $table->date('date');
            $table->time('time');
            $table->unsignedBigInteger('student_signature_id')->nullable();
            $table->string('guardian_name')->nullable();
            $table->unsignedBigInteger('guardian_signature_id')->nullable();
            $table->foreign('offense_id')->references('id')->on('offenses');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('disciplinary_action_id')->references('id')->on('disciplinary_actions')->cascadeOnDelete();
            $table->foreign('student_signature_id')->references('id')->on('student_anecdotal_signatures')->cascadeOnDelete();
            $table->foreign('guardian_signature_id')->references('id')->on('guardian_anecdotal_signatures')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_anecdotals');
    }
};
