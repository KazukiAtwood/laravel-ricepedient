<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index()
    {
        $recettes = Recette::all();
        return view('welcome', compact('recettes'));
    }

    public function show($id)
    {
        $recette = Recette::findOrFail($id);
        return view('recettes.show', compact('recette'));
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'contenu' => 'required|max:500',
        ]);

        $commentaire = new Commentaire([
            'nom_utilisateur' => 'invité', // Nom de l'utilisateur par défaut
            'contenu' => $request->input('contenu'),
            'recette_id' => $id,
        ]);

        $commentaire->save();

        return redirect()->route('recettes.show', $id)->with('success', 'Commentaire ajouté avec succès.');
    }
}

