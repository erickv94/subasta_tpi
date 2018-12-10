<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubastasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subastas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_producto')->unsigned();
            $table->date('fecha_apuesta');
            $table->integer('id_cliente')->unsigned();
            $table->float('propuesta')->unsigned();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('id_producto')->references('id_producto')->on('productos')
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
        Schema::dropIfExists('subastas');
    }
}
