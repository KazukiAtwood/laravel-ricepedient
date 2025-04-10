<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    /**
     * Ajoute ou supprime une recette des favoris de l'utilisateur.
     *
     * @param Recette $recette
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleBookmark(Recette $recette)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour ajouter une recette aux favoris.');
        }

        $user = Auth::user();

        // Vérifier si l'utilisateur a déjà bookmarké la recette
        if ($user->bookmarks()->where('recette_id', $recette->id)->exists()) {
            // Supprimer le bookmark s'il existe déjà
            $user->bookmarks()->where('recette_id', $recette->id)->delete();
            return back()->with('success', 'Recette retirée des favoris.');
        } else {
            // Ajouter la recette aux favoris
            $user->bookmarks()->create(['recette_id' => $recette->id]);
            return back()->with('success', 'Recette ajoutée aux favoris.');
        }
    }

    /**
     * Affiche la liste des recettes bookmarkées par l'utilisateur.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function listBookmarks()
    {
        $user = Auth::user();
        $bookmarkedRecettes = $user->bookmarks()->with('recette')->get();

        return view('utilisateurs.bookmark', [
            'bookmarkedRecettes' => $bookmarkedRecettes,
        ]);
    }
}
