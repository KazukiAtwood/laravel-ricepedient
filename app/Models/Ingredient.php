<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'image', 'quantite', 'recette_id'];

    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}

