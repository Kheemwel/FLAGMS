<?php

use App\Models\ItemTypes;
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
        Schema::create('item_types', function (Blueprint $table) {
            $table->id();
            $table->string('item_type')->unique();
            $table->timestamps();
        });

        ItemTypes::insert([
            [
                'item_type' => 'Wallets and Purses'
            ],
            [
                'item_type' => 'Jewelry and Watches'
            ],
            [
                'item_type' => 'Keys'
            ],
            [
                'item_type' => 'Books and Notebooks'
            ],
            [
                'item_type' => 'Eyewear'
            ],
            [
                'item_type' => 'Miscellaneous Items'
            ],
            [
                'item_type' => 'Bags and Luggage'
            ],
            [
                'item_type' => 'Toys and Stuffed Animals'
            ],
            [
                'item_type' => 'Clothing and Accessories'
            ],
            [
                'item_type' => 'Electronic Devices'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_types');
    }
};
