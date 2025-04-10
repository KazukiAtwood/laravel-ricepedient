<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Signalement extends Model
{
    use HasFactory;

    protected $fillable = ['commentaire_id', 'user_name', 'commentaire_text', 'cause', 'couleur'];

    public function commentaire()
    {
        return $this->belongsTo(Commentaire::class, 'commentaire_id');
    }

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
