@extends('adminlte::page')
@section('content')
<section class="imprimir" style="font-size:20px">
    <form action="">
        <h2 class="alinhamento-titulo"><b>AUTORIZAÇÃO DE LOCAÇÃO DE IMÓVEL</b></h2>
        <section class="alinhamento-texto">
            <div class="row px-2 align-items-center">
                VALOR DA LOCAÇÃO:<input style='width: auto' >
            </div>
            Autorizo GABI MOVEIS CRECI 161.918 F, com escritório situado a Rua Guarabira 191, São João - Guarulhos, a promover a LOCAÇÃO do imóvel de minha propriedade, 
            fazer levantamento de cadastro, assinar vistoria, aditivo de renovação e receber aluguel do seguinte imóvel:
        </section><br>
        <section class="alinhamento-texto">
            <h4 class="alinhamento"><b>Dados do imóvel</b></h4>
            Endereço: <input > n°<input ><br>
            Bairro: <input > Município: <input> <br>
            Cômodos:<input style='width: 2rem'>(<input style='width: 3rem'>)<br>
            Garagem (<input style='width: 2rem'>) Sim (<input style='width: 2rem'>) Não / Água e luz separada (<input style='width: 2rem'>) Sim (<input style='width: 2rem'>) Não <br>
            RGI: <input style='width: auto'> Instalação: <input style='width: auto'> 
        </section>
        <section class="alinhamento-texto">
            <p class="py-2">A partir do início da locação, me comprometo a pagar os honorários de administração do imóvel, <b>sendo: 100% (cem por cento)</b> 
            do valor do aluguel no primeiro mês (de cada nova locação/novo cliente) e 10% (dez por cento) nos demais meses. A presente autorização tem validade 
            indeterminada. <u>A imobiliária não se responsabiliza pela segurança do imóvel no período em que o mesmo se encontra desocupado.</u> Após o imóvel locado, 
            mesmo com o contrato vencido, o proprietário não poderá renovar o contrato/aditivo de locação diretamente ou através de terceiros ao Locatário apresentado 
            por esta imobiliária, sob pena de assim fazendo, pagar o percentual de <b>10% (dez por cento)</b> de administração, referente a 12 meses de locação. Em caso de 
            venda do imóvel pelo proprietário ao cliente apresentado pela imobiliária, será pago a título de honorários o percentual de 6% (seis por cento) do valor 
            da venda a GABI IMOVEIS.</p>
            
        </section>
        <section class="alinhamento-texto">
            <h4 class="alinhamento"><b>Dados do proprietário</b></h4>
            Nome: <input style='width: auto'><br>
            Endereço: <input style='width: 70%'> n° <input style='width: 4rem'><br>
            Estado Civil: <input style='width: auto'> Profissão: <input style='width: auto'><br>
            CPF: <input style='width: auto'> RG: <input style='width: auto'><br>
            Telefone: <input style='width: 6.4rem'><br><br>
                <h4 class="alinhamento"><b>Conta bancária</b></h4>
            Banco: <input style='width: auto'> Agência: <input style='width: auto'><br>
                Corrente/Poupança: <input style='width: auto'> N° conta: <input style='width: auto'><br>
            Pix: <input style='width: auto'><br>
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