<?php

namespace Database\Factories;

use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    protected $model = Ingredient::class;

    public function definition()
    {
        return [
            'libelle' => $this->faker->word,
            'image' => $this->faker->imageUrl(200, 200, 'food', true),
            'quantite' => $this->faker->randomNumber(2) . 'g',
            'recette_id' => Recette::factory(),
        ];
    }
}

