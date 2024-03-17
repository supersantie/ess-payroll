<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
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
            'code' => Str::upper(fake()->bothify('?????-#####')),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'date_hired' => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
            'basic_daily_rate' => floatval(610),
            'monthly_salary' => floatval(16500),
            'job_role' => fake()->randomElement([
                'Software Engineer',
                'Web Developer',
                'Graphic Designer',
                'Digital Marketer',
                'Customer Service Representative',
                'Accountant',
                'Human Resources Manager',
                'Sales Manager',
                'Project Manager',
                'Content Writer'
            ]),
            'status' => fake()->randomElement(['full time', 'part time', 'probationary'])
        ];
    }
}
