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
            $table->unsignedBigInteger('comment_id');
            $table->string('user_name')->default('Invité');
            $table->text('comment_text');
            $table->string('cause');
            $table->string('couleur')->default('rouge');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('signalements');
    }
}
