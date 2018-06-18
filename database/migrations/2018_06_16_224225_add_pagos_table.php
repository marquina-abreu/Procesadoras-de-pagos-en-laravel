<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id_pago');
            $table->integer('id_modo_pago');
            $table->integer('id_producto_pa')->unsigned();;
            $table->integer('quantity');
            $table->string('idcompra');
            $table->integer('id_usuario_pa')->unsigned();;

            $table->foreign('id_producto_pa')->references('id_producto')->on('productos')->onDelete('cascade');
            $table->foreign('id_usuario_pa')->references('id')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('pagos');
    }
}
