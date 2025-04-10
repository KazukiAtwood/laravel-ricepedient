<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Preparation;
use App\Models\Recette;

class PreparationsSeeder extends Seeder
{
    public function run()
    {
        $preparations = [
            // Préparations pour la Tarte aux pommes
            [
                'recette_id' => 1,
                'preparations' => [
                    'Éplucher et trancher les pommes.',
                    'Préparer la pâte et la disposer dans le moule.',
                    'Disposer les tranches de pommes sur la pâte.',
                    'Saupoudrer de sucre et de cannelle.',
                    'Cuire au four à 180°C pendant 45 minutes.'
                ],
            ],

            // Préparations pour le Poulet rôti
            [
                'recette_id' => 2,
                'preparations' => [
                    'Préchauffer le four à 200°C.',
                    'Assaisonner le poulet avec du sel, du poivre et des herbes.',
                    'Placer le poulet dans un plat allant au four.',
                    'Ajouter des quartiers de pommes de terre et des gousses d\'ail autour du poulet.',
                    'Arroser le poulet avec du beurre fondu.',
                    'Cuire au four pendant 90 minutes, en arrosant régulièrement.'
                ],
            ],

            [
                'recette_id' => 3,
                'preparations' => [
                    'Préchauffer le four à 180°C.',
                    'Foncer un moule à tarte avec la pâte brisée.',
                    'Faire revenir les lardons dans une poêle.',
                    'Battre les œufs avec la crème fraîche, sel et poivre.',
                    'Répartir les lardons sur le fond de tarte.',
                    'Verser l\'appareil à quiche sur les lardons.',
                    'Cuire au four pendant 40 minutes environ.'
                ],
            ],

            // Préparations pour la Ratatouille
            [
                'recette_id' => 4,
                'preparations' => [
                    'Couper tous les légumes en cubes.',
                    'Faire revenir l\'oignon et l\'ail dans de l\'huile d\'olive.',
                    'Ajouter les poivrons, courgettes, aubergines et tomates.',
                    'Assaisonner avec du sel, du poivre, du thym et du laurier.',
                    'Laisser mijoter à feu doux pendant 60 minutes.'
                ],
            ],

            // Préparations pour la Soupe à l'oignon
            [
                'recette_id' => 5,
                'preparations' => [
                    'Émincer les oignons finement.',
                    'Faire fondre le beurre dans une grande casserole.',
                    'Faire revenir les oignons jusqu\'à ce qu\'ils soient dorés.',
                    'Saupoudrer de farine et mélanger.',
                    'Verser le bouillon de volaille et porter à ébullition.',
                    'Assaisonner avec du sel, du poivre et du thym.',
                    'Laisser mijoter à feu doux pendant 30 minutes.'
                ],
            ],

            // Préparations pour le Bœuf bourguignon
            [
                'recette_id' => 6,
                'preparations' => [
                    'Couper le bœuf en gros cubes.',
                    'Faire revenir le bœuf dans une cocotte avec de l\'huile d\'olive.',
                    'Ajouter les oignons et l\'ail émincés, puis les carottes coupées en rondelles.',
                    'Verser le vin rouge et le bouillon de bœuf.',
                    'Ajouter le thym, le laurier et les champignons.',
                    'Laisser mijoter à feu doux pendant 2 à 3 heures.'
                ],
            ],

            // Préparations pour les Crêpes
            [
                'recette_id' => 7,
                'preparations' => [
                    'Mélanger la farine, les œufs, le lait, le sucre et une pincée de sel dans un bol.',
                    'Laisser reposer la pâte pendant 30 minutes.',
                    'Faire chauffer une poêle antiadhésive et y verser une louche de pâte.',
                    'Cuire chaque crêpe des deux côtés jusqu\'à ce qu\'elles soient dorées.',
                    'Répéter jusqu\'à épuisement de la pâte.'
                ],
            ],

            // Préparations pour la Salade niçoise
            [
                'recette_id' => 8,
                'preparations' => [
                    'Faire cuire les œufs dans une casserole d\'eau bouillante pendant 10 minutes.',
                    'Couper les tomates en quartiers, les haricots verts en tronçons et les pommes de terre en rondelles.',
                    'Mélanger la laitue, les tomates, les haricots verts, les pommes de terre et les olives dans un grand bol.',
                    'Ajouter le thon émietté et les œufs coupés en quartiers.',
                    'Assaisonner avec du sel, du poivre, de l\'huile d\'olive et du vinaigre.'
                ],
            ],

            // Préparations pour les Pâtes Carbonara
            [
                'recette_id' => 9,
                'preparations' => [
                    'Faire cuire les pâtes dans une grande quantité d\'eau salée selon les instructions sur l\'emballage.',
                    'Faire revenir le bacon dans une poêle jusqu\'à ce qu\'il soit croustillant.',
                    'Dans un bol, mélanger les œufs, le parmesan râpé, le sel et le poivre.',
                    'Égoutter les pâtes et les mélanger avec le mélange d\'œufs jusqu\'à ce qu\'elles soient crémeuses.',
                    'Ajouter le bacon croustillant et mélanger.'
                ],
            ],

            // Préparations pour le Gâteau au chocolat
            [
                'recette_id' => 10,
                'preparations' => [
                    'Préchauffer le four à 180°C.',
                    'Faire fondre le chocolat avec le beurre au bain-marie ou au micro-ondes.',
                    'Battre les œufs avec le sucre jusqu\'à ce que le mélange blanchisse.',
                    'Ajouter le mélange chocolat-beurre fondu et mélanger.',
                    'Incorporer la farine et la levure tamisées.',
                    'Verser la pâte dans un moule beurré et fariné.',
                    'Cuire au four pendant 35 minutes environ.'
                ],
            ],

            // Ajoutez d'autres recettes avec leurs préparations ici
        ];

        foreach ($preparations as $prep) {
            $recette = Recette::find($prep['recette_id']);
            foreach ($prep['preparations'] as $etape => $description) {
                Preparation::create([
                    'recette_id' => $prep['recette_id'],
                    'preparation' => $description,
                ]);
            }
        }
    }
}
