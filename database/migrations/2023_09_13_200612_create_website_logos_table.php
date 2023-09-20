<?php

use App\Models\WebsiteLogo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('website_logo', function (Blueprint $table) {
            $table->id();
            $table->binary('logo');
            $table->timestamps();
        });

        WebsiteLogo::create([
            'logo' => file_get_contents(public_path('images/fiat.png'))
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_logo');
    }
};
