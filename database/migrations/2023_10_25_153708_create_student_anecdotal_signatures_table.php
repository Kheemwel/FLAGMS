<?php

use App\Models\StudentAnecdotalSignatures;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_anecdotal_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('student_signature');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE student_anecdotal_signatures MODIFY student_signature MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_anecdotal_signatures');
    }
};
