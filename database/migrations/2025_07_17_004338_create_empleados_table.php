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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->integer('ci')->unique();    //SIEMPRE MINUSCULAS EN 
            $table->string('nombre_completo');
            $table->string('email')->unique();

            $table->string('rol');
            $table->unsignedBigInteger('id_turno')->nullable();     //esta es una relación a la otra tabla
            //UnsignedBigInteger hace que si o sí entre un entero, sin importar si es texto

            $table->timestamps();

            $table->foreign('id_turno')->references('id')->on('turnos')->onDelete('set null');    //ahora esto ancla la variable a la otra tabla (as in sql) clave foranea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
