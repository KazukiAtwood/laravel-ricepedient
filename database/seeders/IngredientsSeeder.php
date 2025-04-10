<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use App\Models\Recette;

class IngredientsSeeder extends Seeder
{
    public function run()
    {
        // Tarte aux pommes
        $recette = Recette::where('titre', 'Tarte aux pommes')->first();
        Ingredient::create([
            'libelle' => 'Pommes',
            'quantite' => '6',
            'image' => 'img/ingredients/pommes.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Sucre',
            'quantite' => '150g',
            'image' => 'img/ingredients/sucre.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Beurre',
            'quantite' => '100g',
            'image' => 'img/ingredients/beurre.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Pâte brisée',
            'quantite' => '1',
            'image' => 'img/ingredients/pate_brisee.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Cannelle',
            'quantite' => '1 c. à café',
            'image' => 'img/ingredients/cannelle.jpg',
            'recette_id' => $recette->id,
        ]);

        // Poulet rôti
        $recette = Recette::where('titre', 'Poulet rôti')->first();
        Ingredient::create([
            'libelle' => 'Poulet',
            'quantite' => '1',
            'image' => 'img/ingredients/poulet.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Beurre',
            'quantite' => '50g',
            'image' => 'img/ingredients/beurre.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Herbes de Provence',
            'quantite' => '1 c. à soupe',
            'image' => 'img/ingredients/herbes_provence.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Sel',
            'quantite' => '1 c. à café',
            'image' => 'img/ingredients/sel.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Poivre',
            'quantite' => '1 c. à café',
            'image' => 'img/ingredients/poivre.jpg',
            'recette_id' => $recette->id,
        ]);

        // Quiche Lorraine
        $recette = Recette::where('titre', 'Quiche Lorraine')->first();
        Ingredient::create([
            'libelle' => 'Pâte brisée',
            'quantite' => '1',
            'image' => 'img/ingredients/pate_brisee.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Lardons',
            'quantite' => '200g',
            'image' => 'img/ingredients/lardons.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Crème fraîche',
            'quantite' => '200ml',
            'image' => 'img/ingredients/creme_fraiche.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Œufs',
            'quantite' => '3',
            'image' => 'img/ingredients/oeufs.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Gruyère râpé',
            'quantite' => '100g',
            'image' => 'img/ingredients/gruyere.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Oignon',
            'quantite' => '1',
            'image' => 'img/ingredients/oignon.jpg',
            'recette_id' => $recette->id,
        ]);

        // Ratatouille
        $recette = Recette::where('titre', 'Ratatouille')->first();
        Ingredient::create([
            'libelle' => 'Aubergines',
            'quantite' => '2',
            'image' => 'img/ingredients/aubergines.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Courgettes',
            'quantite' => '2',
            'image' => 'img/ingredients/courgettes.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Poivrons',
            'quantite' => '2',
            'image' => 'img/ingredients/poivrons.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Tomates',
            'quantite' => '4',
            'image' => 'img/ingredients/tomates.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Oignon',
            'quantite' => '1',
            'image' => 'img/ingredients/oignon.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Ail',
            'quantite' => '2 gousses',
            'image' => 'img/ingredients/ail.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Huile d\'olive',
            'quantite' => '3 c. à soupe',
            'image' => 'img/ingredients/huile_olive.jpg',
            'recette_id' => $recette->id,
        ]);

        // Soupe à l'oignon
        $recette = Recette::where('titre', 'Soupe à l\'oignon')->first();
        Ingredient::create([
            'libelle' => 'Oignons',
            'quantite' => '500g',
            'image' => 'img/ingredients/oignons.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Beurre',
            'quantite' => '50g',
            'image' => 'img/ingredients/beurre.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Farine',
            'quantite' => '1 c. à soupe',
            'image' => 'img/ingredients/farine.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Bouillon de bœuf',
            'quantite' => '1L',
            'image' => 'img/ingredients/bouillon_boeuf.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Vin blanc',
            'quantite' => '200ml',
            'image' => 'img/ingredients/vin_blanc.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Gruyère râpé',
            'quantite' => '100g',
            'image' => 'img/ingredients/gruyere.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Pain',
            'quantite' => '4 tranches',
            'image' => 'img/ingredients/pain.jpg',
            'recette_id' => $recette->id,
        ]);

        // Bœuf bourguignon
        $recette = Recette::where('titre', 'Bœuf bourguignon')->first();
        Ingredient::create([
            'libelle' => 'Bœuf',
            'quantite' => '1kg',
            'image' => 'img/ingredients/boeuf.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Carottes',
            'quantite' => '3',
            'image' => 'img/ingredients/carottes.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Oignon',
            'quantite' => '1',
            'image' => 'img/ingredients/oignon.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Ail',
            'quantite' => '3 gousses',
            'image' => 'img/ingredients/ail.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Champignons',
            'quantite' => '200g',
            'image' => 'img/ingredients/champignons.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Vin rouge',
            'quantite' => '750ml',
            'image' => 'img/ingredients/vin_rouge.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Bouquet garni',
            'quantite' => '1',
            'image' => 'img/ingredients/bouquet_garni.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Farine',
            'quantite' => '2 c. à soupe',
            'image' => 'img/ingredients/farine.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Beurre',
            'quantite' => '50g',
            'image' => 'img/ingredients/beurre.jpg',
            'recette_id' => $recette->id,
        ]);

        // Crêpes
        $recette = Recette::where('titre', 'Crêpes')->first();
        Ingredient::create([
            'libelle' => 'Farine',
            'quantite' => '250g',
            'image' => 'img/ingredients/farine.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Œufs',
            'quantite' => '4',
            'image' => 'img/ingredients/oeufs.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Lait',
            'quantite' => '500ml',
            'image' => 'img/ingredients/lait.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Sucre',
            'quantite' => '50g',
            'image' => 'img/ingredients/sucre.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Beurre',
            'quantite' => '50g',
            'image' => 'img/ingredients/beurre.jpg',
            'recette_id' => $recette->id,
        ]);

        // Salade niçoise
        $recette = Recette::where('titre', 'Salade niçoise')->first();
        Ingredient::create([
            'libelle' => 'Thon en boîte',
            'quantite' => '200g',
            'image' => 'img/ingredients/thon.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Œufs',
            'quantite' => '2',
            'image' => 'img/ingredients/oeufs.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Haricots verts',
            'quantite' => '200g',
            'image' => 'img/ingredients/haricots_verts.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Olives noires',
            'quantite' => '100g',
            'image' => 'img/ingredients/olives_noires.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Tomates',
            'quantite' => '2',
            'image' => 'img/ingredients/tomates.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Laitue',
            'quantite' => '1',
            'image' => 'img/ingredients/laitue.jpg',
            'recette_id' => $recette->id,
        ]);

        // Pâtes Carbonara
        $recette = Recette::where('titre', 'Pâtes Carbonara')->first();
        Ingredient::create([
            'libelle' => 'Spaghetti',
            'quantite' => '400g',
            'image' => 'img/ingredients/spaghetti.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Bacon',
            'quantite' => '150g',
            'image' => 'img/ingredients/bacon.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Œufs',
            'quantite' => '3',
            'image' => 'img/ingredients/oeufs.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Crème fraîche',
            'quantite' => '200ml',
            'image' => 'img/ingredients/creme_fraiche.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Parmesan râpé',
            'quantite' => '100g',
            'image' => 'img/ingredients/parmesan.jpg',
            'recette_id' => $recette->id,
        ]);

        // Gâteau au chocolat
        $recette = Recette::where('titre', 'Gâteau au chocolat')->first();
        Ingredient::create([
            'libelle' => 'Chocolat noir',
            'quantite' => '200g',
            'image' => 'img/ingredients/chocolat_noir.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Beurre',
            'quantite' => '150g',
            'image' => 'img/ingredients/beurre.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Sucre',
            'quantite' => '150g',
            'image' => 'img/ingredients/sucre.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Farine',
            'quantite' => '100g',
            'image' => 'img/ingredients/farine.jpg',
            'recette_id' => $recette->id,
        ]);
        Ingredient::create([
            'libelle' => 'Œufs',
            'quantite' => '4',
            'image' => 'img/ingredients/oeufs.jpg',
            'recette_id' => $recette->id,
        ]);
    }
}
