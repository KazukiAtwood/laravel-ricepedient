<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{
    protected $fillable = ['preparation', 'recette_id'];
    public $timestamps = true;

    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }

    public function run()
    {
        Preparation::factory()->count(10)->create();
    }
}
