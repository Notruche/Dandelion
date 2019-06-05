<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content');
            $table->string('date');
            $table->unsignedInteger('user_id')->default(1);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('chapitre_id')->default(1);
            $table->foreign('chapitre_id')->references('id')->on('chapitres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
