<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarksTable extends Migration
{
    public function up()
    {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('recette_id');
            $table->timestamps();

            // Assure l'unicité de la paire (user_id, recette_id)
            $table->unique(['user_id', 'recette_id']);

            // Clés étrangères
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('recette_id')->references('id')->on('recettes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookmarks');
    }
}
