<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->float('monto')->unsigned();
            $table->date('fecha_compra');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_producto')->unsigned();

            $table->foreign('id_producto')->references('id_producto')->on('productos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('compras');
    }
}
