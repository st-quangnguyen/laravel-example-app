<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(5, true),
            'description' => fake()->sentence(10),
            'type' => 0,
            'status' => 0,
            'start_date' => Carbon::parse('2000-01-01'),
            'due_date' => Carbon::parse('2000-01-01'),
            'estimate' => 2.0,
            'actual' => 2.0,
            'assignee' => 1,
        ];
    }
}
