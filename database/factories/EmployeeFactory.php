<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            //
            'EmpNo' => fake()->name(),
            'EmpName' => fake()->name(),
            'NIC' => fake()->name(),
            'email' => fake()->safeEmail(),
            'ContactNumber' => fake()->name(),
            'DateOfJoin' => fake()->date(),
            'Password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'isActive' => fake()->boolean(),

        ];
    }
}
