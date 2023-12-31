<?php

use App\Models\WebsiteTitle;
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
        Schema::create('website_title', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title');
            $table->timestamps();
        });

        // Insert data after the table created
        WebsiteTitle::create([
            'title' => '<p class="font-weight-bold" style="font-size: 50px; color: #0A0863; font-family: "Lato", sans-serif;">FLAGMS</p>'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_title');
    }
};
