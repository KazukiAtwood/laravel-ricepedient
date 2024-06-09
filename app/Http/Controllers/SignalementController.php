<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signalement;

class SignalementController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment_id' => 'required|exists:comments,id',
            'user_name' => 'required|string',
            'comment_text' => 'required|string',
            'cause' => 'required|string',
        ]);

        // Enregistrer le signalement dans la base de données
        Signalement::create([
            'comment_id' => $request->comment_id,
            'user_name' => $request->user_name,
            'comment_text' => $request->comment_text,
            'cause' => $request->cause,
        ]);

        return back()->with('success', 'Le commentaire a été signalé avec succès.');
    }
}

