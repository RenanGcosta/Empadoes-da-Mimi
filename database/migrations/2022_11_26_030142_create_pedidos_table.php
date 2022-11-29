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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->set('entrega', ['Delivery', 'Retirada']);
            $table->float('valor_total', 3, 2);
            $table->set('status', ['Entregue', 'Cancelado', 'Em Produção', 'Saiu para Entrega']);
            $table->string('descricao', 250);

            //(FK) table users
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')
                ->onUpdate('restrict')->onDelete('restrict');

            //(FK) table clientes
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes')
                ->onUpdate('restrict')->onDelete('restrict');

            //(FK) table tipo_pagamentos
            $table->unsignedBigInteger('id_pagamento');
            $table->foreign('id_pagamento')->references('id')->on('tipo_pagamentos')
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
        Schema::dropIfExists('pedidos');
    }
};
