<?php

use App\Models\Teachers;
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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_account_id');
            $table->foreign('user_account_id')->references('id')->on('user_accounts')->cascadeOnDelete();
            $table->timestamps();
        });

        $teacher1 = UserAccounts::create([
            'first_name' => 'Justine',
            'last_name' => 'Juanima',
            'password' => bcrypt('test'),
            'email' => 'teacher1@email.com',
            'role_id' => 4,
        ]);

        $teacher2 = UserAccounts::create([
            'first_name' => 'Kim',
            'last_name' => 'Belyer',
            'password' => bcrypt('test'),
            'email' => 'teacher2@email.com',
            'role_id' => 4,
        ]);

        Teachers::insert([
            [
                'user_account_id' => $teacher1->id,
            ],
            [
                'user_account_id' => $teacher2->id,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
