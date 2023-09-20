<?php

use App\Models\OffensesSanctions;
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
        Schema::create('offenses_sanctions', function (Blueprint $table) {
            $table->id();
            $table->string('offenses_sanction')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        OffensesSanctions::insert([
            [
                'offenses_sanction' => 'Dismissal'
            ],
            [
                'offenses_sanction' => 'Suspension'
            ],
            [
                'offenses_sanction' => 'Community Service'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offenses_sanctions');
    }
};
