<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['nom_utilisateur', 'contenu', 'recette_id'];

    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}

