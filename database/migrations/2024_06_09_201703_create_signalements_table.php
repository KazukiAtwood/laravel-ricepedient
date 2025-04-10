<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignalementsTable extends Migration
{
    public function up()
    {
        Schema::create('signalements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commentaire_id');
            $table->string('user_name');
            $table->text('commentaire_text');
            $table->string('cause');
            $table->string('couleur')->default('rouge');
            $table->timestamps();

            $table->foreign('commentaire_id')->references('id')->on('commentaires')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('signalements');
    }
}
