<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = User::all();
        return view('admin.utilisateur', compact('utilisateurs'));
    }

    public function destroy($id)
    {
        $utilisateur = User::findOrFail($id);
        $utilisateur->delete();
        return redirect()->route('admin.utilisateur')->with('success', 'Utilisateur supprimé avec succès');
    }

    public function rechercher(Request $request)
    {
        $q = $request->input('q');

        // Recherche des utilisateurs dont le nom ou l'email contient la valeur de recherche
        $utilisateurs = User::where('name', 'like', '%' . $q . '%')
            ->orWhere('email', 'like', '%' . $q . '%')
            ->get();

        // Passez les résultats à la vue et affichez-les
        return view('admin.recherche_utilisateur', compact('utilisateurs', 'q'));
    }

    public function afficherProfil($id)
    {
        $utilisateur = User::findOrFail($id); // Récupère l'utilisateur par son ID

        return view('utilisateurs.profile', compact('utilisateur'));
    }

    public function update(Request $request, $id)
    {
        $utilisateur = User::findOrFail($id);

        // Valider les données de la requête
        $request->validate([
            'telephone' => 'required|string|max:10',
        ]);

        // Mettre à jour le numéro de téléphone de l'utilisateur
        $utilisateur->telephone = $request->input('telephone');
        $utilisateur->save();

        // Rediriger vers la vue des recettes après la mise à jour du profil
        return redirect()->route('recettes.index')->with('success', 'Votre profil a été mis à jour avec succès.');
    }


    public function bookmarks($id)
    {
        $utilisateur = User::findOrFail($id);
        $bookmarks = $utilisateur->bookmarks()->get();

        return view('utilisateurs.bookmark', compact('utilisateur', 'bookmarks'));
    }
}
