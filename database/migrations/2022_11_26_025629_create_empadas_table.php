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
        Schema::create('empadas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200);
            $table->string('descricao', 250);
            $table->string('foto');
            $table->decimal('valor', 18, 2);

            //(FK) table tamanhos
            $table->unsignedBigInteger('id_tamanho');
            $table->foreign('id_tamanho')->references('id')->on('tamanhos')
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
        Schema::dropIfExists('empadas');
    }
};
