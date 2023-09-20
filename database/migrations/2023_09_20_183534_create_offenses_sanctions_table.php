<?php

<<<<<<< HEAD
use App\Models\OffensesSanctions;
=======
>>>>>>> ed281d0044a81337046d687f4315be458e15aca1
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
            $table->string('offenses_sanction');
<<<<<<< HEAD
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
=======
            $table->text('description');
            $table->timestamps();
        });
>>>>>>> ed281d0044a81337046d687f4315be458e15aca1
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offenses_sanctions');
    }
};
