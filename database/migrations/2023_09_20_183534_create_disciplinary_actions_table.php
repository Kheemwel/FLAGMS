<?php

use App\Models\DisciplinaryActions;
use App\Models\OffenseLevels;
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
        Schema::create('offense_levels', function (Blueprint $table) {
            $table->id();
            $table->string('level')->unique();
            $table->timestamps();
        });

        OffenseLevels::insert([
            [
                'level' => 'First Offense'
            ],
            [
                'level' => 'Second Offense'
            ],
            [
                'level' => 'Third Offense'
            ],
            [
                'level' => 'Fourth Offense'
            ],
            [
                'level' => 'Final Offense'
            ]
        ]);

        Schema::create('disciplinary_actions', function (Blueprint $table) {
            $table->id();
            $table->string('action')->unique();
            $table->timestamps();
        });

        DisciplinaryActions::insert([
            [
                'action' => 'Dismissal'
            ],
            [
                'action' => 'Suspension and Remedial Classes'
            ],
            [
                'action' => '3-Day Academic Community Service'
            ],
            [
                'action' => '2-Day Academic Community Service'
            ],
            [
                'action' => 'Oral Warning'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offense_levels');
        Schema::dropIfExists('disciplinary_actions');
    }
};
