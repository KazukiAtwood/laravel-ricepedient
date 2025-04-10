<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreparationsTable extends Migration
{
    public function up()
    {
        Schema::create('preparations', function (Blueprint $table) {
            $table->id();
            $table->text('preparation');
            $table->foreignId('recette_id')->constrained()->onDelete('cascade');
            $table->timestamps(); // Assurez-vous que les timestamps sont inclus ici
        });
    }

    public function down()
    {
        Schema::dropIfExists('preparations');
    }
}
