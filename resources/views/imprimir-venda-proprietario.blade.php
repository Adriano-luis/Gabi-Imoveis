@extends('adminlte::page')
@section('content')
<section class="imprimir">
    <form action="">
        <h2 class="alinhamento-titulo"><b>AUTORIZAÇÃO DE VENDA DE IMÓVEL</b></h2>
        <section class="alinhamento-texto">
            <div class="row px-2 align-items-center">
                VALOR DA LOCAÇÃO:<input style='width: auto' value="{{$imovel->valor}}">
            </div>
            <p>Autorizo GABI MOVEIS CRECI 161.918 F, com escritório situado a Rua Guarabira 191, São João - Guarulhos, a promover a intermediação da venda do imóvel descrito nesse documento.
            Declamo estar ciente da obrigação de apresentar todas as certidões que comprovem a regularidade do imóvel e de seus respectivos titulares, por ocasião do recebimento de uma proposta bem como
            do que os honorários devidos estão fixado em <b>6% (seis porcento)</b> sobre o valor total do negócio (10% do imóvel rural), devendo ser pagos no ato da assinatura do contrato ou,
             no caso de sua dispensa, no ato da assinatura da escritura pública.</p>
             <p>Como também fazer a divulgação do meu imóvel. A presente autorização terá um prazo de vigência indeterminado:
             

        </section>
        <section class="alinhamento-texto">
            <h4 class="alinhamento"><b>Dados do imóvel</b></h4>
            Endereço: <input value="{{$imovel->endereco}}"> n°<input value="{{$imovel->numero}}"><br>
            Bairro: <input value="{{$imovel->bairro}}"> Município: <input value="{{$imovel->municipio}}"> <br>
            Cômodos:<input style='width: 2rem'value="{{$imovel->qtComodos}}">({{$imovel->quarto > 0?$imovel->quarto.' '.'quarto(s),':''}} {{$imovel->suite >0?$imovel->suite.' '.'suite(s),':''}} {{$imovel->cozinha>0?$imovel->cozinha.' '.'cozinha(s),':''}} {{$imovel->lavanderia>0?$imovel->lavanderia.' '.'lavanderia(s),':''}}, {{$imovel->salaEstar>0?$imovel->salaEstar.' '.'sala(s) de estar,':''}} {{$imovel->salaJantar>0?$imovel->salaJantar.' '.'sala(s) de jantar,':''}} {{$imovel->banheiro>0?$imovel->banheiro.' '.'banheiro(s),':''}} {{$imovel->escritorio>0?$imovel->escritorio.' '.'escritório(s),':''}} {{$imovel->jardim>0?$imovel->jardim.' '.'jardim(ns),':''}} {{$imovel->varanda>0?$imovel->varanda.' '.'varanda(s)':''}})<br>
            Garagem (<input style='width: 2rem'value="{{$imovel->garagem > 0?'X':''}}">) Sim (<input style='width: 2rem' value="{{$imovel->garagem <= 0 || $imovel->garagem == '' ?'X':''}}">) Não / Água e luz separada (<input style='width: 2rem' value="{{$imovel->aguaLuzSeparado == 'sim' ? 'x':''}}">) Sim (<input style='width: 2rem' value="{{$imovel->aguaLuzSeparado == 'Nao'?'x':''}}">) Não <br>
            RGI: <input style='width: auto' value="{{$imovel->RGI}}"> Instalação: <input style='width: auto' value="{{$imovel->instalacao}}"> 
        </section>
            
        <section class="alinhamento-texto">
            <h4 class="alinhamento"><b>Dados do proprietário</b></h4>
            Nome: <input style='width: auto' value="{{$vendedor->nome}}"><br>
            Endereço: <input style='width: 70%' value="{{$vendedor->endereco}}"> n° <input style='width: 4rem' value="{{$vendedor->numero}}"><br>
            Estado Civil: <input style='width: auto' value="{{$vendedor->estadoCivil}}"> Profissão: <input style='width: auto' value="{{$vendedor->profissao}}"><br>
            CPF: <input style='width: auto' value="{{$vendedor->CPF}}"> RG: <input style='width: auto' value="{{$vendedor->RG}}"><br>
            Telefone: <input style='width: 6.4rem' value="{{$vendedor->telefone}}">
                <h4 class="alinhamento"><b>Conta bancária</b></h4>
            Banco: <input style='width: auto' value="{{$vendedor->banco}}"> Agência: <input style='width: auto' value="{{$vendedor->agencia}}"><br>
                Corrente/Poupança: <input style='width: auto' value="{{$vendedor->tipoConta}}"> N° conta: <input style='width: auto' value="{{$vendedor->conta}}"><br>
            Pix: <input style='width: auto' value="{{$vendedor->pix}}"><br>
            <span class="alinhamento-data">Guarulhos<input style='width: 2rem'> de <input style='width: 5rem'>de<input style='width: 4rem'></span><br><br>
        </section>
        <section class="alinhamento-texto">
            <div>
                Imobiliária:     ___________________________________<br><br>
                Proprietário(a): _______________________________
            </div>
        </section>
        <div class="alinhamento-titulo">
            <button onclick="window.print()" class="btn btn-primary imovel-btn-print py-2 hide-print">Imprimir</button>
        </div>
    </form>
</section>
@endsection