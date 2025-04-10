<?php

// Bookmark.php (Modèle Bookmark)

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable = ['user_id', 'recette_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}

