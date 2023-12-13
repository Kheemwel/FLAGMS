<?php

use App\Models\PrincipalPositions;
use App\Models\Principals;
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
        Schema::create('principal_positions', function (Blueprint $table) {
            $table->id();
            $table->string('position')->unique();
            $table->timestamps();
        });

        PrincipalPositions::insert([
            [
                'position' => 'Junior High School Principal'
            ],
            [
                'position' => 'Senior High School Principal'
            ]
        ]);

        Schema::create('principals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_account_id');
            $table->unsignedBigInteger('principal_position_id');
            $table->foreign('user_account_id')->references('id')->on('user_accounts')->cascadeOnDelete();
            $table->foreign('principal_position_id')->references('id')->on('principal_positions')->cascadeOnDelete();
            $table->timestamps();
        });

        
        $principal1 = UserAccounts::create([
            'first_name' => 'Sheryl',
            'last_name' => 'Ferreras',
            'password' => bcrypt('test'),
            'email' => 'principal1@email.com',
            'role_id' => 5,
        ]);

        $principal2 = UserAccounts::create([
            'first_name' => 'Rosahle',
            'last_name' => 'Pagadora',
            'password' => bcrypt('test'),
            'email' => 'principal2@email.com',
            'role_id' => 5,
        ]);

        
        Principals::insert(
            [
                [
                    'user_account_id' => $principal1->id,
                    'principal_position_id' => 1,
                ],
                [
                    'user_account_id' => $principal2->id,
                    'principal_position_id' => 2,
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principals');
        Schema::dropIfExists('principal_positions');
    }
};
