<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signalement;

class SignalementController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'commentaire_id' => 'required|exists:commentaires,id',
            'user_name' => 'required|string|max:255',
            'commentaire_text' => 'required|string|max:500',
            'cause' => 'required|string|in:Harcèlement,Inapproprié,Sexuel'
        ]);

        Signalement::create([
            'commentaire_id' => $request->commentaire_id,
            'user_name' => $request->user_name,
            'commentaire_text' => $request->commentaire_text,
            'cause' => $request->cause,
            'couleur' => 'rouge'
        ]);

        return redirect()->back()->with('success', 'Le commentaire a été signalé avec succès.');
    }

    public function gestionSignalements()
    {
        // Charger tous les signalements avec les informations d'utilisateur associées
        $signalements = Signalement::with('utilisateur')->get();

        return view('admin.signalement', [
            'signalements' => $signalements,
        ]);
    }
}

