<?php

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
        Schema::create('lost_and_found', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->unsignedBigInteger('item_type_id');
            $table->unsignedBigInteger('item_image_id');
            $table->text('description')->nullable();
            $table->dateTime('datetime_found');
            $table->string('finder_name');
            $table->string('location_found');
            $table->boolean('is_claimed')->default(false);
            $table->string('owner_name')->nullable();
            $table->dateTime('claimed_datetime')->nullable();
            $table->foreign('item_type_id')->references('id')->on('item_types');
            $table->foreign('item_image_id')->references('id')->on('item_images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lost_and_found');
    }
};
