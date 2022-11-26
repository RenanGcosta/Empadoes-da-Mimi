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
            $table->string('nome', 250);
            $table->string('telefone', 14);
            $table->string('cep', 8);
            $table->string('logradouro', 250);
            $table->string('bairro', 150);
            $table->string('cidade', 100);
            $table->string('email', 200);

            // (FK) table users
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')
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
        Schema::dropIfExists('clientes');
    }
};
