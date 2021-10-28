<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedor', function (Blueprint $table) {
            $table->id();
            $table->integer('idImovel');
            $table->string('nome');
            $table->string('endereco');
            $table->string('numero');
            $table->string('bairro');
            $table->string('municipio');
            $table->string('complemento');
            $table->string('estadoCivil');
            $table->date('nascimento');
            $table->string('profissao');
            $table->string('CPF');
            $table->string('RG');
            $table->string('telefone');
            $table->string('banco');
            $table->string('agencia');
            $table->string('tipoConta');
            $table->string('conta');
            $table->string('pix');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendedor');
    }
}
