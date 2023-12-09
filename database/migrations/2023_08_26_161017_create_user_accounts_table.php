<?php

use App\Models\Roles;
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
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('hashed_password');
            $table->string('email')->unique();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('profile_picture_id')->nullable();
            $table->boolean('is_archive')->default(false);
            $table->dateTime('archived_at')->nullable();
            $table->integer('total_login')->default(0);
            $table->dateTime('last_login')->nullable();
            $table->string('remember_token')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->foreign('profile_picture_id')->references('id')->on('profile_pictures')->cascadeOnDelete();
            $table->timestamps();
        });

        UserAccounts::create([
            'first_name' => 'FLA',
            'last_name' => 'GMS', 
            'password' => 'flagms@admin1',
            'hashed_password' => bcrypt('flagms@admin1'),
            'email' => 'flagms1@gmail.com',
            'role_id' => 7,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_accounts');
    }
};
