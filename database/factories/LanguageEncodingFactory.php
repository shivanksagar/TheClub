<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\languages;
use App\Models\User;

class LanguageEncodingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'language_id' => languages::all()->random()->id,
            'to_be_encoded' => $this->faker->sentence,
            'is_encoded' => $this->faker->sentence,
            'user_id' => User::all()->random()->id,
        ];
    }
}
