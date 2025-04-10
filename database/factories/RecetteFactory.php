<?php

namespace Database\Factories;

use App\Models\Recette;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecetteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recette::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'difficulte' => $this->faker->randomElement(['Facile', 'Moyenne', 'Difficile']),
            'image' => 'recette.jpg', // chemin vers une image par défaut
            'description' => $this->faker->paragraph,
            'astuces' => $this->faker->paragraph,
            'temps_cuisson' => $this->faker->numberBetween(10, 120),
            'temps_prep' => $this->faker->numberBetween(5, 60),
        ];
    }
}
