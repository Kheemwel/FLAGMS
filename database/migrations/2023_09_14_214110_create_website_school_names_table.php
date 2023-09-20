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
            'school_name' => 'Fiat Lux Academe'
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
