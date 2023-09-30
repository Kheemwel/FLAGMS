<?php

use App\Models\PrincipalPositions;
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

        PrincipalPositions::insert([
            [
                'position' => 'Junior High School Principal'
            ],
            [
                'position' => 'Senior High School Principal'
            ]
        ]);

        Schema::create('principals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_account_id');
            $table->unsignedBigInteger('principal_position_id');
            $table->foreign('user_account_id')->references('id')->on('user_accounts');
            $table->foreign('principal_position_id')->references('id')->on('principal_positions');
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
