<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioAsesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_asesors', function (Blueprint $table) {
            $table->id('id');
            $table->integer('asesor_id');
            $table->foreign('asesor_id')->references('id')->on('asesors')->onDelete('cascade');
            
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->string('dia', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario_asesors');
    }
}
