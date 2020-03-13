<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesarrolladorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desarrolladors', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('direccion');
          $table->string('telefono');
          $table->bigInteger('idProyecto')->unsigned();
          $table->foreign('idProyecto')->references('id')->on('proyectos');
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
        Schema::dropIfExists('desarrolladors');
    }
}
