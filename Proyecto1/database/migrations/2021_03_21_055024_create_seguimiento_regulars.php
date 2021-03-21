<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientoRegulars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_regulars', function (Blueprint $table) {
            $table->integer('estudiante_id');
            $table->unique('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->string('situacion', 255);
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
        Schema::dropIfExists('seguimiento_regulars');
    }
}
