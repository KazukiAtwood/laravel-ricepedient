<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bookmark;
use App\Http\Controllers\HomeController;


class RecetteController extends Controller
{
    public function index()
    {
        $recettes = Recette::all();
        return view('welcome', compact('recettes'));
    }

    public function show($id)
    {
        // Récupérer la recette en fonction de l'ID
        $recette = Recette::findOrFail($id);

        // Passer la recette à la vue et afficher
        return view('recettes.show', compact('recette'));
    }

    public function storeComment(Request $request, $id)
    {
        // Vérifie si l'utilisateur est connecté
        if (!Auth::check()) {
            return back()->with('error', 'Vous devez être connecté pour commenter.');
        }

        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Valider les données du formulaire
        $request->validate([
            'contenu' => 'required|max:500',
        ]);

        // Créer le commentaire avec le nom d'utilisateur de l'utilisateur connecté
        $commentaire = new Commentaire([
            'nom_utilisateur' => $user->email, // Remplacez 'name' par le champ approprié de votre modèle Utilisateur
            'contenu' => $request->input('contenu'),
            'recette_id' => $id,
        ]);

        // Sauvegarder le commentaire
        $commentaire->save();

        return redirect()->route('recettes.show', $id)->with('success', 'Commentaire ajouté avec succès.');
    }


    public function toggleLike($id)
    {
        $recette = Recette::findOrFail($id);
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        $bookmark = Bookmark::where('user_id', $user->id)
            ->where('recette_id', $recette->id)
            ->first();

        if ($bookmark) {
            $bookmark->delete();
            return response()->json(['message' => 'Bookmark removed.']);
        } else {
            $bookmark = new Bookmark();
            $bookmark->user_id = $user->id;
            $bookmark->recette_id = $recette->id;
            $bookmark->save();
            return response()->json(['message' => 'Bookmark added.']);
        }
    }
}

