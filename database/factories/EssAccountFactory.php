<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EssAccount>
 */
class EssAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'employee_code' => Employee::factory(),
            'password' => Hash::make('123456'),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
