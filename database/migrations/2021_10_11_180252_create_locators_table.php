<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locators', function (Blueprint $table) {
            $table->id();
            $table->integer('idImovel');
            $table->string('nome');
            $table->string('endereco');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('municipio');
            $table->string('complemento');
            $table->string('estadoCivil');
            $table->string('profissao');
            $table->integer('CPF');
            $table->integer('RG');
            $table->integer('telefone');
            $table->string('banco');
            $table->integer('agencia');
            $table->integer('tipoConta');
            $table->integer('conta');
            $table->string('pix');
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
        Schema::dropIfExists('locators');
    }
}
