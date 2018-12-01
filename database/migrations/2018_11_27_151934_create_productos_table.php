<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('nombre_producto',128);
            $table->string('slug',128)->unique();
            $table->string('codigo',64)->unique();
            $table->string('descripcion',500)->nullable();
            $table->float('precio_inicial',4,2)->default(0);
            $table->date('fecha_publicacion')->nullable();
            $table->date('fecha_expiracion')->nullable();
            $table->string('file_img',128)->nullable();
            $table->boolean('publicacion')->default(false);
            //Llaves Foraneas
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('id_empresa')->unsigned();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas')
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
        Schema::dropIfExists('productos');
    }
}
