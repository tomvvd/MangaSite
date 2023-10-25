<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->unsignedBigInteger('serie_id');
            $table->string('type', 50);
            $table->string('description', 500);
            $table->timestamps();

            $table->foreign('serie_id')->references('id')->on('series');
        });
    }

    public function down()
    {
        Schema::dropIfExists('personnages');
    }
};
