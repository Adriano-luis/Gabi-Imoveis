@extends('adminlte::page')
@section('content')
<section class="imprimir" style="font-size:20px">
    <form action="">
        <h2 class="alinhamento-titulo"><b>AUTORIZAÇÃO DE LOCAÇÃO DE IMÓVEL</b></h2>
        <section class="alinhamento-texto">
            <div class="row px-2 align-items-center">
                VALOR DA LOCAÇÃO:<input style='width: auto' value="{{$imovel->valor}}">
            </div>
            Autorizo GABI MOVEIS CRECI 161.918 F, com escritório situado a Rua Guarabira 191, São João - Guarulhos, a promover a LOCAÇÃO do imóvel de minha propriedade, 
            fazer levantamento de cadastro, assinar vistoria, aditivo de renovação e receber aluguel do seguinte imóvel:
        </section><br>
        <section class="alinhamento-texto">
            <h4 class="alinhamento"><b>Dados do imóvel</b></h4>
            Endereço: <input value="{{$imovel->endereco}}"> n°<input value="{{$imovel->numero}}"><br>
            Bairro: <input value="{{$imovel->bairro}}"> Município: <input value="{{$imovel->municipio}}"> <br>
            Cômodos:<input style='width: 2rem'value="{{$imovel->qtComodos}}">({{$imovel->quarto > 0?$imovel->quarto.' '.'quarto(s),':''}} {{$imovel->suite >0?$imovel->suite.' '.'suite(s),':''}} {{$imovel->cozinha>0?$imovel->cozinha.' '.'cozinha(s),':''}} {{$imovel->lavanderia>0?$imovel->lavanderia.' '.'lavanderia(s),':''}} {{$imovel->salaEstar>0?$imovel->salaEstar.' '.'sala(s) de estar,':''}} {{$imovel->salaJantar>0?$imovel->salaJantar.' '.'sala(s) de jantar,':''}} {{$imovel->banheiro>0?$imovel->banheiro.' '.'banheiro(s),':''}} {{$imovel->escritorio>0?$imovel->escritorio.' '.'escritório(s),':''}} {{$imovel->jardim>0?$imovel->jardim.' '.'jardim(ns),':''}} {{$imovel->varanda>0?$imovel->varanda.' '.'varanda(s)':''}})<br>
            Garagem (<input style='width: 2rem'value="{{$imovel->garagem > 0?'X':''}}">) Sim (<input style='width: 2rem' value="{{$imovel->garagem <= 0 || $imovel->garagem == '' ?'X':''}}">) Não / Água e luz separada (<input style='width: 2rem' value="{{$imovel->aguaLuzSeparado == 'sim' ? 'x':''}}">) Sim (<input style='width: 2rem' value="{{$imovel->aguaLuzSeparado == 'Nao'?'x':''}}">) Não <br>
            RGI: <input style='width: auto' value="{{$imovel->RGI}}"> Instalação: <input style='width: auto' value="{{$imovel->instalacao}}"> 
        </section>
        <section class="alinhamento-texto">
            <p class="py-2">A partir do início da locação, me comprometo a pagar os honorários de administração do imóvel, <b>sendo: <input style='width: 3.5rem'> (<span 
  class="input" 
  role="textbox" 
  contenteditable>
</span> por cento)</b> 
            do valor do aluguel no primeiro mês (de cada nova locação/novo cliente) e <input style='width: 3.5rem'> (<span 
  class="input" 
  role="textbox" 
  contenteditable>
</span> por cento)</b> nos demais meses. A presente autorização tem validade 
            indeterminada. <u>A imobiliária não se responsabiliza pela segurança do imóvel no período em que o mesmo se encontra desocupado.</u> Após o imóvel locado, 
            mesmo com o contrato vencido, o proprietário não poderá renovar o contrato/aditivo de locação diretamente ou através de terceiros ao Locatário apresentado 
            por esta imobiliária, sob pena de assim fazendo, pagar o percentual de <b><input style='width: 3rem'> (<span 
  class="input" 
  role="textbox" 
  contenteditable>
</span> por cento)</b> de administração, referente a 12 meses de locação. Em caso de 
            venda do imóvel pelo proprietário ao cliente apresentado pela imobiliária, será pago a título de honorários o percentual de <b><input style='width: 3rem'> (<span 
  class="input" 
  role="textbox" 
  contenteditable>
</span> por cento)</b>  do valor 
            da venda a GABI IMOVEIS.</p>
            
        </section>
        <section class="alinhamento-texto">
            <h4 class="alinhamento"><b>Dados do proprietário</b></h4>
            Nome: <input style='width: auto' value="{{$locador->nome}}"><br>
            Endereço: <input style='width: 70%' value="{{$locador->endereco}}"> n° <input style='width: 4rem' value="{{$locador->numero}}"><br>
            Estado Civil: <input style='width: auto' value="{{$locador->estadoCivil}}"> Profissão: <input style='width: auto' value="{{$locador->profissao}}"><br>
            CPF: <input style='width: auto' value="{{$locador->CPF}}"> RG: <input style='width: auto' value="{{$locador->RG}}"><br>
            Telefone: <input style='width: 6.4rem' value="{{$locador->telefone}}"><br><br>
                <h4 class="alinhamento"><b>Conta bancária</b></h4>
            Banco: <input style='width: auto' value="{{$locador->banco}}"> Agência: <input style='width: auto' value="{{$locador->agencia}}"><br>
                Corrente/Poupança: <input style='width: auto' value="{{$locador->tipoConta}}"> N° conta: <input style='width: auto' value="{{$locador->conta}}"><br>
            Pix: <input style='width: auto' value="{{$locador->pix}}"><br>
            <span class="alinhamento-data">Guarulhos<input style='width: 2rem'> de <input style='width: 5rem'>de<input style='width: 4rem'></span><br><br>
        </section>
        <section class="alinhamento-texto">
            <div><br>
                Proprietário(a): ________________________________
            </div>
        </section>
        <div class="alinhamento-titulo">
            <button onclick="window.print()" class="btn btn-primary imovel-btn-print py-2 hide-print">Imprimir</button>
        </div>
    </form>
</section>
@endsection