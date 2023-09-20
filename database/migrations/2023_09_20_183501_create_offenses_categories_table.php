<?php

<<<<<<< HEAD
use App\Models\OffensesCategories;
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
        Schema::create('offenses_categories', function (Blueprint $table) {
            $table->id();
            $table->string('offenses_category');
<<<<<<< HEAD
            $table->text('description')->nullable();
            $table->timestamps();
        });

        OffensesCategories::insert([
            [
                'offenses_category' => 'First Offense'
            ],
            [
                'offenses_category' => 'Minor Offense'
            ],
            [
                'offenses_category' => 'Major Offense'
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
        Schema::dropIfExists('offenses_categories');
    }
};
