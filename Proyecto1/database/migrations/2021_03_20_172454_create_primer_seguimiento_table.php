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
            $table->integer('id');
            $table->primary('id');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('primer_seguimiento');
    }
}
