<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leave>
 */
class LeaveFactory extends Factory
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
            'LeaveType' => fake()->name(),
            'leaveCatogory' => fake()->address,
            'Reason' => fake()->text(),
            'Date' => fake()->date(),
            'Permission' => fake()->boolean(),
        ];
    }
}
