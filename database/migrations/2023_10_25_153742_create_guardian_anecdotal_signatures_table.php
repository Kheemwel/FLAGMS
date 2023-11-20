<?php

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
        Schema::create('guardian_anecdotal_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('guardian_signature');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE guardian_anecdotal_signatures MODIFY guardian_signature MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardian_anecdotal_signatures');
    }
};
