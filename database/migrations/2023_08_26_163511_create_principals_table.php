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
        Schema::create('principal_positions', function (Blueprint $table) {
            $table->id();
            $table->string('position')->unique();
            $table->timestamps();
        });

        Schema::create('principals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_account_id');
            $table->unsignedBigInteger('principal_position');
            $table->foreign('user_account_id')->references('id')->on('user_accounts');
            $table->foreign('principal_position')->references('id')->on('principal_positions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principal_positions');
        Schema::dropIfExists('principals');
    }
};
