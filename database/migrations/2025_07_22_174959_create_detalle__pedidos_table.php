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
        Schema::create('detalle__pedidos', function (Blueprint $table) {
            $table->id();

            $table->integer('cantidad');
            $table->float('subtotal');

            $table->unsignedBigInteger('id_pedido');     //esta es una relación a la otra tabla
            $table->unsignedBigInteger('id_inventario');

            $table->timestamps();

            $table->foreign('id_pedido')->references('id')->on('pedidos')->onDelete('set null');
            $table->foreign('id_inventario')->references('id')->on('inventarios')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__pedidos');
    }
};
