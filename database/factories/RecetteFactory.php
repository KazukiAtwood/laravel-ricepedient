<?php

namespace Database\Factories;

use App\Models\Recette;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecetteFactory extends Factory
{
    protected $model = Recette::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480, 'food', true),
            'description' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}


