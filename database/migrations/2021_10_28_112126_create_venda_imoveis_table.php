<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda_imoveis', function (Blueprint $table) {
            $table->id();
            $table->integer('idVendedor');
            $table->bigInteger('valor');
            $table->string('endereco');
            $table->string('numero');
            $table->string('bairro');
            $table->string('municipio');
            $table->string('complemento');
            $table->integer('metragemTotal');
            $table->integer('terreno');
            $table->integer('qtComodos');
            $table->integer('quarto');
            $table->integer('suite');
            $table->integer('cozinha');
            $table->integer('lavanderia');
            $table->integer('salaEstar');
            $table->integer('salaJantar');
            $table->integer('banheiro');
            $table->integer('garagem');
            $table->integer('escritorio');
            $table->integer('jardim');
            $table->integer('varanda');
            $table->date('criado');
            $table->date('atualizado');
            $table->string('contrato');
            $table->string('escritura');
            $table->string('contratoPoss');
            $table->string('usocapiao');
            $table->string('outros');
            $table->string('condominio');
            $table->text('nomeCondominio');
            $table->integer('valorCondominio');
            $table->integer('andar');
            $table->string('individual');
            $table->string('mobilhado');
            $table->string('desdobro');
            $table->string('iptu');
            $table->string('tipo');
            $table->text('sobreImovel');
            $table->text('sobreMobilia');
            $table->text('sobreCondominio');
            $table->text('observacoes');
            $table->string('disponivel');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('img5');
            $table->string('img6');
            $table->string('img7');
            $table->string('img8');
            $table->string('img9');
            $table->string('img10');
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
        Schema::dropIfExists('venda_imoveis');
    }
}
