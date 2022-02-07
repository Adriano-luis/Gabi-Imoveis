@extends('adminlte::page')
@section('content')
<section class="imprimir">
    <form action="">
        <h2 class="alinhamento-titulo"><b>CAPTAÇÃO DE VENDAS</b></h2>
        <section class="alinhamento-texto">
            <div class="row alinhamento-data">
                Valor Avaliado R$:<input style='width: 4rem' value="{{$imovel->valor}}">
            </div><br><br>
            <div class="alinhamento-titulo">
                <h4 class="alinhamento"><b>Dados do proprietário</b></h4>
            </div>
            <section class="alinhamento-texto">
                <div class="row format">
                    Nome: <input style='width: 90%' value="{{$vendedor->nome}}"><br>
                </div>
                <div class="row format">
                    RG: <input style='width: 15%' value="{{$vendedor->RG}}"><br>
                    Telefone: <input style='width: 69%' value="{{$vendedor->telefone}}">
                </div>
            </section><br>

        <div class="alinhamento-titulo">
            <h4 class="alinhamento"><b>Dados do imóvel</b></h4>
        </div>
        <section class="alinhamento-texto">
                Endereço: <input style='width: 60%' value="{{$vendedor->endereco}}"> n°: <input style='width: 4rem' value="{{$vendedor->numero}}"><br>
                Bairro: <input style='width: 30%' value="{{$vendedor->bairro}}"> Município: <input style='width: 5rem' value="{{$vendedor->municipio}}"><br>
        </section><br>

        <div class="alinhamento-titulo">
            <h4 class="alinhamento"><b>Características do Imóvel</b></h4>
        </div>
        <section class="alinhamento-titulo">
            <table style="width:90%">
                <tr>
                    <td colspan="4">Documentação: <input style='width: 4rem' class="tabela"></td>
                </tr>
                    <tr>
                    <td colspan="4">Metragem: <input style='width: 2rem' class="tabela" value="{{$imovel->metragemTotal}}">m²<br></td>
                </tr>
                <tr>
                    <td>Dormitórios: <input style='width: 4rem' class="tabela" value="{{$imovel->quarto}}"></td>
                    <td>Suítes: <input style='width: 4rem' class="tabela" value="{{$imovel->suite}}"></td>
                    <td>Salas: <input style='width: 4rem' class="tabela" value="{{$imovel->salaEstar}}"></td>
                </tr>
                    <tr>
                    <td>WC: <input style='width: 4rem' class="tabela" value="{{$imovel->banheiro}}"></td>
                    <td>Garagem:  <input style='width: 4rem' class="tabela" value="{{$imovel->garagem}}"></td>
                    <td>Cozinhas: <input style='width: 4rem' class="tabela" value="{{$imovel->cozinha}}"></td>
                </tr>
                <tr>
                    <td colspan="2">Area de serviço: <input style='width: 4rem' class="tabela" value="{{$imovel->lavanderia}}"></td>
                    <td style="text-align: left">Terreno livre: <input style='width: 4rem' class="tabela" value="{{$imovel->salaEstar}}"></td>
                </tr>
                
                <tr>
                    <td colspan="4">Obs.: <input style='width: auto' class="tabela" value="{{$imovel->obsevacoes}}"</td>
                </tr>
            </table>
        </section>


        <section class="alinhamento-texto">
            <p>Autorizo GABI MOVEIS CRECI 161.918 F, com escritório situado a Rua Guarabira 191, São João - Guarulhos, a promover a intermediação da venda do imóvel descrito nesse documento.
            Declamo estar ciente da obrigação de apresentar todas as certidões que comprovem a regularidade do imóvel e de seus respectivos titulares, por ocasião do recebimento de uma proposta bem como
            do que os honorários devidos estão fixado em <b><input style='width: 3rem'> (<span 
  class="input" 
  role="textbox" 
  contenteditable>
</span> por cento)</b>  sobre o valor total do negócio (<span 
  class="input" 
  role="textbox" 
  contenteditable>
</span> por cento do imóvel rural), devendo ser pagos no ato da assinatura do contrato ou,
            no caso de sua dispensa, no ato da assinatura da escritura pública.</p>
            <p>Como também fazer a divulgação do meu imóvel. A presente autorização terá um prazo de vigência indeterminado:</p>

        </section><br>
        <span class="row alinhamento-data">Guarulhos,<input style='width: 2rem'> de <input style='width: 5rem'>de<input style='width: 4rem'></span><br><br><br><br>
            
        <section class="alinhamento-texto">
            <div class="row">
                <div style="padding-right: 10%" class="col-6 align-center d-flex justify-content-center">
                    <p>___________________________________<p><br><br>
                </div><br>
                <div class="col-6 align-center d-flex justify-content-center">
                    <p>___________________________________</p>
                </div>
            </div>
            <div class="row">
                <div style="padding-right: 10%" class="col-6 align-center d-flex justify-content-center">
                    <p>Captação<p><br><br>
                </div><br>
                <div class="col-6 align-center d-flex justify-content-center">
                    <p>Proprietário</p>
                </div>
            </div>
        </section>
             
        <div class="alinhamento-titulo">
            <button onclick="window.print()" class="btn btn-primary imovel-btn-print py-2 hide-print">Imprimir</button>
        </div>
    </form>
</section>
@endsection