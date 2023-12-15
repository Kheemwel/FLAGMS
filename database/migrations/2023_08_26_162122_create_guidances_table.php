<?php

use App\Models\Guidance;
use App\Models\UserAccounts;
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
        Schema::create('guidance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_account_id');
            $table->foreign('user_account_id')->references('id')->on('user_accounts')->cascadeOnDelete();
            $table->timestamps();
        });

        $guidance = UserAccounts::create([
            'first_name' => 'Josephine',
            'last_name' => 'Amador',
            'password' => bcrypt('test'),
            'email' => 'guidance@email.com',
            'role_id' => 1,
        ]);

        Guidance::create([
            'user_account_id' => $guidance->id,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guidance');
    }
};
