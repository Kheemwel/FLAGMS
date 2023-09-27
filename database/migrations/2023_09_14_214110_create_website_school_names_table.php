<?php

use App\Models\WebsiteSchoolName;
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
        Schema::create('website_school_name', function (Blueprint $table) {
            $table->id();
            $table->mediumText('school_name');
            $table->timestamps();
        });

        // Insert data after the table created
        WebsiteSchoolName::create([
            'school_name' => '
            <span style="color: #0A0863; font-weight: bold; font-family: "Inria Serif", serif; font-size: 22px;">Fiat Lux Academe</span>
            <span style="color: #0A0863; font-size: 16px; font-weight: bold; font-family: "Inria Serif", serif;">Cavite</span>'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_school_name');
    }
};
