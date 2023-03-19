<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        $user = User::all()->random();
        while (count($user->categories) == 0) {
            $user = User::all()->random();
        }
        return [
            'done' => $this->faker->boolean(30),
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'due_date' => $this->faker->dateTime('2022-12-31'),
            'user_id' => $user,
            'category_id' => $user->categories->random(),
        ];
    }
}
