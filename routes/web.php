<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\SignalementController;
use App\Http\Controllers\AuthController;

Route::get('/', [RecetteController::class, 'index'])->name('recettes.index');
Route::get('/recettes/{id}', [RecetteController::class, 'show'])->name('recettes.show');
Route::post('/recettes/{id}/commentaires', [RecetteController::class, 'storeComment'])->name('recettes.commentaires.store');

Route::post('/signalements', [SignalementController::class, 'store'])->name('signalements.store');
Route::post('/commentaires/signalements', 'App\Http\Controllers\SignalementController@store')->name('signalements.store');

Route::get('/utilisateurs', 'App\Http\Controllers\UtilisateurController@index')->name('utilisateurs.index');
Route::delete('/utilisateurs/{id}', 'App\Http\Controllers\UtilisateurController@destroy')->name('utilisateurs.destroy');

Route::get('/rechercher', 'App\Http\Controllers\RechercheController@rechercher')->name('rechercher');

Route::get('/recettes/{id}', 'App\Http\Controllers\RecetteController@show')->name('recettes.show');

Route::get('/login', 'App\Http\Controllers\RecetteController@show')->name('recettes.show');


Route::middleware(['web'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/home', function () {
        return view('home');
    })->middleware('auth');
});

Route::post('/commentaires/{commentaire}/signaler', 'CommentaireController@signaler')->name('commentaires.signaler');
