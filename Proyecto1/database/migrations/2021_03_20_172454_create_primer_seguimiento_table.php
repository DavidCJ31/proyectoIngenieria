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
            $table->string('estado', 20);
            $table->string('aprovacion', 20)->nullable();
            $table->bigInteger('detalle_curso_id')->unsigned()->nullable();
            $table->foreign('detalle_curso_id')->references('id')->on('detalle_cursos')->onDelete('cascade');
            $table->text('Observaciones')->nullable();
            $table->dateTime('fecha')->nullable();
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
