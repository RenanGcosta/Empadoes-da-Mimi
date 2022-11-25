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
    public function up()         //VERIFICAR TIPOS APARTIR DO EER
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->datetime('data_registro');
            $table->datetime('data_entrega');
            $table->set('status', ['entregue', 'producao', 'cancelado', 'envido']);
            $table->string('observacao', 250);
            $table->float('valor_total', 3,2);

            $table->unsignedBigInteger('id_tipo_pagamento');
            $table->foreign('id_tipo_pagamento')->references('id')->on('tipo_pagamentos')
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