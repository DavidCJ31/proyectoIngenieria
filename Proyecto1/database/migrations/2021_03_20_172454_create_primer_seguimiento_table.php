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
        Schema::create('primer_seguimiento', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('horario_asesor_id')->unsigned();
            $table->foreign('horario_asesor_id')->references('id')->on('horario_asesors')->onDelete('cascade');
            $table->integer('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->string('materiaTutoria', 45);
            $table->string('profesorCurso', 45);
            $table->integer('creditoCruso');
            $table->string('situacion', 255);
            $table->string('tipoTutoria', 13);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('primer_seguimiento');
    }
}
