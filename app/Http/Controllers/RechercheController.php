<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recette;

class RechercheController extends Controller
{
    public function rechercher(Request $request)
    {
        $q = $request->input('q');
        // Logique de recherche ici
        // Par exemple, recherchez des recettes dont le titre contient la valeur de recherche
        $resultats = Recette::where('titre', 'like', '%' . $q . '%')->get();
        // Passez les résultats à la vue et affichez-les
        return view('resultats_recherche', compact('resultats', 'q'));
    }
}
