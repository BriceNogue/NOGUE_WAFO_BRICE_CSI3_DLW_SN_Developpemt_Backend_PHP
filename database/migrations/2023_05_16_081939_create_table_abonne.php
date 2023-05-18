<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAbonne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonne', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('sexe');
            $table->string('profession');
            $table->string('rue');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('pays');
            $table->string('telephone');
            $table->string('email');
            $table->foreign(('id_motivation'))->references('id')->on('motivation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonne');
    }
}
