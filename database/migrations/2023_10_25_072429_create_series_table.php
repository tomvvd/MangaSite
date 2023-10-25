<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->string('auteur', 100);
            $table->smallInteger('nombre_volumes')->unsigned();
            $table->date('date_premiere_parution');
            $table->string('couverture', 100);
            $table->boolean('serie_finie');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('series');
    }
};
