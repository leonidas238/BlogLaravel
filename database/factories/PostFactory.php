<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->word(),
            'cuerpo' => $this->faker->text(300),
            'user_id' => User::all()->random(),
            
        ];
    }
}
