<?php

<<<<<<< HEAD
use App\Models\OffensesSanctions;
=======
<<<<<<< HEAD
use App\Models\OffensesSanctions;
=======
>>>>>>> ed281d0044a81337046d687f4315be458e15aca1
>>>>>>> ebd31b3dfeb01aec4c50915c55bd8eaf5044ac12
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
=======
<<<<<<< HEAD
>>>>>>> ebd31b3dfeb01aec4c50915c55bd8eaf5044ac12
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
<<<<<<< HEAD
=======
=======
            $table->text('description');
            $table->timestamps();
        });
>>>>>>> ed281d0044a81337046d687f4315be458e15aca1
>>>>>>> ebd31b3dfeb01aec4c50915c55bd8eaf5044ac12
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offenses_sanctions');
    }
};
