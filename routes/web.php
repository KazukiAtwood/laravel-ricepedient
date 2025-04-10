<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\SignalementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ForgotPasswordController;

//Partie authentification
Route::get('/', [RecetteController::class, 'index'])->name('recettes.index');
Route::get('/recettes/{id}', [RecetteController::class, 'show'])->name('recettes.show');
Route::post('/recettes/{id}/commentaires', [RecetteController::class, 'storeComment'])->name('recettes.commentaires.store');
Route::post('/recettes/{id}/toggle-like', [RecetteController::class, 'toggleLike'])->name('recettes.toggle-like');

Route::post('/commentaires/signalements', 'App\Http\Controllers\SignalementController@store')->name('signalements.store');

Route::get('/utilisateurs', 'App\Http\Controllers\UtilisateurController@index')->name('admin.utilisateur');
Route::delete('/utilisateurs/{id}', 'App\Http\Controllers\UtilisateurController@destroy')->name('utilisateurs.destroy');

Route::get('/rechercher', 'App\Http\Controllers\RechercheController@rechercher')->name('rechercher');

Route::get('/recettes/{id}', 'App\Http\Controllers\RecetteController@show')->name('recettes.show');

Route::get('/profile', 'App\Http\Controllers\UtilisateurController@afficherProfil')->name('utilisateurs.profile');

//Partie authentification
Route::middleware(['web'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');

    Route::get('/home', function () {
        return view('recettes.index');
    })->middleware('auth');

});

//Partie administration
Route::get('/admin/utilisateurs', [AdminController::class, 'gestionUtilisateurs'])
    ->name('admin.utilisateur')
    ->middleware('App\Http\Middleware\AdminMiddleware');

Route::get('/admin/signalements', [AdminController::class, 'gestionSignalements'])
    ->name('admin.signalement')
    ->middleware('App\Http\Middleware\AdminMiddleware');

Route::get('/admin/utilisateurs/rechercher', [AdminController::class, 'rechercherUtilisateurs'])
    ->name('admin.utilisateur.rechercher')
    ->middleware('App\Http\Middleware\AdminMiddleware');

Route::delete('/admin/signalements/{id}', [AdminController::class, 'destroySignalement'])
    ->name('admin.signalements.destroy')
    ->middleware('App\Http\Middleware\AdminMiddleware');

Route::put('/admin/signalements/{id}/update-color', [AdminController::class, 'updateCouleurSignalement'])
    ->name('admin.signalements.updateColor')
    ->middleware('App\Http\Middleware\AdminMiddleware');

Route::get('/utilisateurs/rechercher', [UtilisateurController::class, 'rechercher'])->name('utilisateurs.rechercher');

//Partie profil
Route::get('/utilisateurs/{id}/profil', [UtilisateurController::class, 'afficherProfil'])
    ->name('utilisateurs.profil');
Route::put('/utilisateurs/{id}', [UtilisateurController::class, 'update'])->name('utilisateurs.update');

Route::get('/utilisateurs/{id}/bookmarks', [UtilisateurController::class, 'bookmarks'])
    ->name('utilisateurs.bookmark');

Route::post('/commentaires/{commentaire}/signaler', 'CommentaireController@signaler')->name('commentaires.signaler');
Route::post('/signalements', [SignalementController::class, 'store'])->name('signalements.store');

// Route pour ajouter/supprimer un bookmark
Route::post('/recettes/{recette}/bookmark', [BookmarkController::class, 'toggleBookmark'])
    ->name('recettes.bookmark.toggle');

// Route pour afficher les bookmarks de l'utilisateur
Route::get('/utilisateurs/bookmarks', [BookmarkController::class, 'listBookmarks'])
    ->name('utilisateurs.bookmark');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('utilisateurs.index');

Route::put('/utilisateurs/{id}', 'App\Http\Controllers\UtilisateurController@update')->name('utilisateurs.update');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

