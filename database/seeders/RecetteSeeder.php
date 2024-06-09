<?php

namespace Database\Seeders;

use App\Models\Recette;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class RecetteSeeder extends Seeder
{
    public function run()
    {
        Recette::factory()
            ->count(10)
            ->has(Ingredient::factory()->count(5))
            ->create();
    }
}


