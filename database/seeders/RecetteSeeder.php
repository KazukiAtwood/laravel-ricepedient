<?php

namespace Database\Seeders;

use App\Models\Recette;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class RecetteSeeder extends Seeder
{
    public function run()
    {
        Recette::create([
            'titre' => 'Tarte aux pommes',
            'difficulte' => 'moyen',
            'image' => 'img/recettes/tarte_aux_pommes.jpg',
            'description' => 'Une délicieuse tarte aux pommes faite maison.',
            'astuces' => 'Préparez bien votre temps.',
            'temps_cuisson' => 45, // Temps de cuisson en minutes
            'temps_prep' => 15, // Temps de cuisson en minutes
        ]);

        Recette::create([
            'titre' => 'Poulet rôti',
            'difficulte' => 'facile',
            'image' => 'img/recettes/poulet_roti.jpg',
            'description' => 'Un délicieux poulet rôti doré à souhait.',
            'astuces' => 'Utilisez du beurre pour une peau plus croustillante.',
            'temps_cuisson' => 90, // Temps de cuisson en minutes
            'temps_prep' => 20, // Temps de préparation en minutes
        ]);

        Recette::create([
            'titre' => 'Quiche Lorraine',
            'difficulte' => 'moyen',
            'image' => 'img/recettes/quiche_lorraine.jpg',
            'description' => 'Une quiche lorraine savoureuse avec une croûte dorée.',
            'astuces' => 'Laissez refroidir avant de couper pour une meilleure tenue.',
            'temps_cuisson' => 40, // Temps de cuisson en minutes
            'temps_prep' => 20, // Temps de préparation en minutes
        ]);

        Recette::create([
            'titre' => 'Ratatouille',
            'difficulte' => 'moyen',
            'image' => 'img/recettes/ratatouille.jpg',
            'description' => 'Un plat provençal à base de légumes mijotés.',
            'astuces' => 'Utilisez des légumes frais pour un meilleur goût.',
            'temps_cuisson' => 60, // Temps de cuisson en minutes
            'temps_prep' => 30, // Temps de préparation en minutes
        ]);

        Recette::create([
            'titre' => 'Soupe à l\'oignon',
            'difficulte' => 'facile',
            'image' => 'img/recettes/soupe_oignon.jpg',
            'description' => 'Une soupe réconfortante avec des oignons caramélisés.',
            'astuces' => 'Ajoutez du fromage râpé pour plus de saveur.',
            'temps_cuisson' => 30, // Temps de cuisson en minutes
            'temps_prep' => 15, // Temps de préparation en minutes
        ]);

        Recette::create([
            'titre' => 'Bœuf bourguignon',
            'difficulte' => 'difficile',
            'image' => 'img/recettes/boeuf_bourgi.jpg',
            'description' => 'Un classique de la cuisine française avec du bœuf mijoté.',
            'astuces' => 'Préparez-le la veille pour un goût encore meilleur.',
            'temps_cuisson' => 180, // Temps de cuisson en minutes
            'temps_prep' => 40, // Temps de préparation en minutes
        ]);

        Recette::create([
            'titre' => 'Crêpes',
            'difficulte' => 'facile',
            'image' => 'img/recettes/crepes.jpg',
            'description' => 'Des crêpes légères et délicieuses.',
            'astuces' => 'Laissez reposer la pâte pendant 30 minutes avant de cuire.',
            'temps_cuisson' => 10, // Temps de cuisson en minutes
            'temps_prep' => 10, // Temps de préparation en minutes
        ]);

        Recette::create([
            'titre' => 'Salade niçoise',
            'difficulte' => 'facile',
            'image' => 'img/recettes/salade_nice.jpg',
            'description' => 'Une salade fraîche et colorée avec du thon et des olives.',
            'astuces' => 'Utilisez de l\'huile d\'olive extra vierge pour l\'assaisonnement.',
            'temps_cuisson' => 0, // Temps de cuisson en minutes
            'temps_prep' => 15, // Temps de préparation en minutes
        ]);

        Recette::create([
            'titre' => 'Pâtes Carbonara',
            'difficulte' => 'facile',
            'image' => 'img/recettes/pates_carbo.jpg',
            'description' => 'Des pâtes crémeuses avec du bacon et du parmesan.',
            'astuces' => 'Utilisez des œufs frais pour une sauce plus onctueuse.',
            'temps_cuisson' => 15, // Temps de cuisson en minutes
            'temps_prep' => 10, // Temps de préparation en minutes
        ]);

        Recette::create([
            'titre' => 'Gâteau au chocolat',
            'difficulte' => 'moyen',
            'image' => 'img/recettes/gateau_choco.jpg',
            'description' => 'Un gâteau moelleux au chocolat.',
            'astuces' => 'Ajoutez une pincée de sel pour rehausser le goût du chocolat.',
            'temps_cuisson' => 35, // Temps de cuisson en minutes
            'temps_prep' => 20, // Temps de préparation en minutes
        ]);
    }
}


