<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'due_date' => $this->faker->dateTime('2022-12-31'),
            'user_id' => rand(1,10),
            'category_id' => rand(1,20),
        ];
    }
}
