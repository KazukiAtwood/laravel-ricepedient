<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use App\Http\Controllers\HomeController;



class RegisterController extends Controller
{
    // Méthode pour afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Méthode pour gérer l'inscription
    public function register(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:10', // Minimum 10 caractères
                'regex:/[a-z]/', // Au moins une lettre minuscule
                'regex:/[A-Z]/', // Au moins une lettre majuscule
                'regex:/[0-9]/', // Au moins un chiffre
                'regex:/[@$!%*?&]/', // Au moins un caractère spécial
                'confirmed' // Correspondance avec le champ de confirmation
            ],
            'telephone' => 'required|digits:10',
            'genre' => 'required|in:homme,femme,autres',
            'conditions' => 'accepted',
        ]);

        // Créer un nouvel utilisateur
        $user = new User([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
            'genre' => $request->genre,
        ]);
        $user->save(['timestamps' => false]);

        // Redirection après inscription réussie
        return redirect()->route('recettes.index')->with('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
    }
}
