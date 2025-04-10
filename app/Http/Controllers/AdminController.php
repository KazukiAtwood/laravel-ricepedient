<?php

namespace App\Http\Controllers;

use App\Models\Signalement; // Importation du modèle Signalement
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Assurez-vous d'importer la classe Controller si nécessaire
use App\Models\User; // Importez le modèle User si nécessaire

class AdminController extends Controller
{
    public function gestionUtilisateurs()
    {
        // Logique pour gérer les utilisateurs
        $users = User::all(); // Récupère tous les utilisateurs

        return view('admin.utilisateur', ['utilisateurs' => $users]);
    }

    public function gestionSignalements()
    {
        $signalements = Signalement::all(); // Utilisation du modèle Signalement

        return view('admin.signalement', [
            'signalements' => $signalements,
        ]);
    }

    public function rechercherUtilisateurs(Request $request)
    {
        $q = $request->input('q');

        // Recherche des utilisateurs par nom ou email
        $utilisateurs = User::where('nom', 'like', '%' . $q . '%')
            ->orWhere('prenom', 'like', '%' . $q . '%')
            ->orWhere('email', 'like', '%' . $q . '%')
            ->get();

        // Passez les résultats à la vue et affichez-les
        return view('admin.recherche_utilisateur', compact('utilisateurs', 'q'));
    }

    public function destroySignalement($id)
    {
        // Recherchez le signalement par son ID
        $signalement = Signalement::findOrFail($id);

        // Supprimez le signalement
        $signalement->delete();

        // Redirigez l'utilisateur vers la page des signalements avec un message
        return redirect()->route('admin.signalements')->with('success', 'Le signalement a été supprimé avec succès.');
    }

    public function updateCouleurSignalement(Request $request, $id)
    {
        $request->validate([
            'couleur' => 'required|string|in:rouge,jaune,vert',
        ]);

        $signalement = Signalement::findOrFail($id);
        $signalement->couleur = $request->couleur;
        $signalement->save();

        return redirect()->back()->with('success', 'La couleur du signalement a été mise à jour avec succès.');
    }
}
