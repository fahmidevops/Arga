<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'title' => $this->faker->sentence(mt_rand(2, 10)),
            'slug'  => $this->faker->slug(),
            'location' => $this->faker->sentence(mt_rand(2, 15)),
            'komponen' => $this->faker->sentence(mt_rand(2, 10)),
            'description' => $this->faker->sentence(mt_rand(2, 20)),
            'status' => 1,
            'user_id' => mt_rand(1, 5),
            'staff_id' => mt_rand(1, 3),
            'type_id' => mt_rand(1, 3)
        ];
    }
}
