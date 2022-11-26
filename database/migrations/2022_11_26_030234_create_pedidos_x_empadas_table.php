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
        Schema::create('pedidos_x_empadas', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');

            //(FK) table pedidos
            $table->unsignedBigInteger('id_pedido');
            $table->foreign('id_pedido')->references('id')->on('pedidos')
            ->onUpdate('restrict')->onDelete('restrict');

            //(FK) table empadas
            $table->unsignedBigInteger('id_empada');
            $table->foreign('id_empada')->references('id')->on('empadas')
            ->onUpdate('restrict')->onDelete('restrict');

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
        Schema::dropIfExists('pedidos_x_empadas');
    }
};
