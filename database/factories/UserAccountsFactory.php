<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAccounts>
 */
class UserAccountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $password = $this->faker->password;
        return [
            'role_id' => rand(1, 3),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'password' => $password,
            'hashed_password' => bcrypt($password),
            'email' =>$this->faker->email
        ];
    }
}
