<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\MyUsers;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyUsers>
 */
class MyUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = MyUser::class;
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->username,
            'password' => fake()->unique()->password, // Change this as needed
            'hashed_password' => Hash::make('password'), // Change this as needed
            // Add other fields and their default values
        ];
    }
}
