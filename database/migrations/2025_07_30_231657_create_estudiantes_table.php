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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->string('nombres');    //SIEMPRE MINUSCULAS EN 
            $table->string('apellidos');
            $table->integer('ci')->unique();
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('carrera');
            $table->date('año_ingreso');
            $table->string('estado');

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
        Schema::dropIfExists('estudiantes');
    }
};
