<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id('id');

            $table->bigInteger('clase_id')->unsigned();
            $table->integer('estudiante_id');
            $table->foreign('clase_id')->references('id')->on('clases');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');


            $table->tinyInteger('presencialidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}
