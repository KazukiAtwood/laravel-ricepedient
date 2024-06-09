<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'image', 'description', 'astuces', 'temps_prep'];

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}

