<?php

use App\Models\DisciplinaryActions;
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
        Schema::create('disciplinary_actions', function (Blueprint $table) {
            $table->id();
            $table->string('action')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DisciplinaryActions::insert([
            [
                'action' => 'Dismissal'
            ],
            [
                'action' => 'Suspension'
            ],
            [
                'action' => 'Quarterly Academic Remediation'
            ],
            [
                'action' => '3-Day Academic Cummunity Service'
            ],
            [
                'action' => '2-Day Academic Cummunity Service'
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
        Schema::dropIfExists('disciplinary_actions');
    }
};
