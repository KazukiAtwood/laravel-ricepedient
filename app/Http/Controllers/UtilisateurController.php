<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = User::all();
        return view('utilisateurs.index', compact('utilisateurs'));
    }

    public function destroy($id)
    {
        $utilisateur = User::findOrFail($id);
        $utilisateur->delete();
        return redirect()->route('utilisateurs.index')->with('success', 'Utilisateur supprimé avec succès');
    }
}
