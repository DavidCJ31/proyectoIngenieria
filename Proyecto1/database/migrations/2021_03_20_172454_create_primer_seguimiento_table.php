<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimerSeguimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primer_seguimientos', function (Blueprint $table) {
            $table->integer('estudiante_id');
            $table->unique('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->string('materiaTutoria', 45);
            $table->string('profesorCurso', 45);
            $table->integer('creditoCruso');
            $table->string('situacion', 255);
            $table->string('tipoTutoria', 13);
            $table->string('estado', 13);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('primer_seguimientos');
    }
}
