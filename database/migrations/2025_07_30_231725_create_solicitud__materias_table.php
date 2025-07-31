<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud__materias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estudiante')->nullable();

            $table->string('codigo_materia');    //SIEMPRE MINUSCULAS EN 
            $table->string('nombre_materia');
            $table->string('grupo');
            $table->string('docente');
            $table->string('semestre');
            $table->string('turno');
            $table->date('fecha_solicitud');
            $table->string('motivo');
            $table->string('estado');
            $table->string('observaciones'); 



            $table->timestamps();

            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud__materias');
    }
};
