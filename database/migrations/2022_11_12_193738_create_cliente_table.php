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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->String('nome', 200);
            $table->String('logradouro', 250);
            $table->String('cep', 8);
            $table->String('bairro', 100);
            $table->String('cidade', 100);
            $table->String('telefone', 11);
            $table->enum('sexo', ['m', 'f']);
            $table->String('email', 180);
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
        Schema::dropIfExists('clientes');
    }
};