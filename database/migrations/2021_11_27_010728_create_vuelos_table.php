<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('numVuelo');
            $table->unsignedBigInteger('idAvion');
            $table->unsignedBigInteger('idAeropuerto');
            $table->timestamps();
            $table->foreign('idAvion')->references('id')->on('aviones')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idAeropuerto')->references('id')->on('aeropuertos')->onDelete('cascade')->onUpdate('cascade');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
}
