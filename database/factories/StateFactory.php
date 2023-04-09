<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    protected $model = State::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'likes' => $this->faker->numberBetween($min=1, $max=40), // от 1 до 40 лайков
            'views' => $this->faker->numberBetween($min=41, $max=120), // от 41 до 120 просмотров
        ];
    }
}
