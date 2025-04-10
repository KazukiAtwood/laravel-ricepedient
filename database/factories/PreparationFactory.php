<?php

namespace Database\Factories;

use App\Models\Preparation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreparationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Preparation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'preparation' => $this->faker->paragraph,
            // Define other fields as needed
        ];
    }
}
