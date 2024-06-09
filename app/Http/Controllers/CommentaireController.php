<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Signalement;

class CommentaireController extends Controller
{
    public function signaler(Commentaire $commentaire)
    {
        // Récupérez le type de signalement à partir de la requête
        $typeSignalement = request('signalement_type');

        // Créez un nouveau signalement dans la base de données
        $signalement = new Signalement();
        $signalement->commentaire_id = $commentaire->id;
        $signalement->type = $typeSignalement;
        $signalement->couleur = 'rouge'; // La couleur est obligatoirement mise à "rouge"
        $signalement->save();

        // Redirigez l'utilisateur vers la page où se trouve le commentaire
        return redirect()->back()->with('success', 'Le commentaire a été signalé avec succès.');
    }
}
