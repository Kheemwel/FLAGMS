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
        Schema::create('all_data_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('middle_initial', 1)->nullable();
            $table->integer('age');
            $table->double('weight');
            $table->integer('contact')->unique();
            $table->date('birthday');
            $table->time('alarm');
            $table->string('profile');
            $table->boolean('isHuman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_data_types');
    }
};
