<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Faker\Core\Number;

class languagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'status' => rand(0, 1),
            'language_key' => Str::random(10),
            'user_id' => User::all()->random()->id,
        ];
    }
}
