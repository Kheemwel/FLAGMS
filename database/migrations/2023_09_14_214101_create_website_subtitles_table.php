<?php

use App\Models\WebsiteSubtitle;
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
        Schema::create('website_subtitle', function (Blueprint $table) {
            $table->id();
            $table->mediumText('subtitle');
            $table->timestamps();
        });

        // Insert data after the table created
        WebsiteSubtitle::create([
            'subtitle' => '<p style="font-size: 35px; font-weight: 800; font-family: "Lato", sans-serif;">(Fiat Lux Academe Guidance Management System)</p>'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_subtitle');
    }
};
