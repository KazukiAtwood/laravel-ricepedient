<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signalement extends Model
{
    use HasFactory;

    protected $fillable = ['comment_id', 'user_name', 'comment_text', 'cause', 'couleur'];

    public function comment()
    {
        return $this->belongsTo(Commentaire::class);
    }
}
