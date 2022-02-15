@extends('adminlte::page')
@section('content')
<section class="imprimir">
    <form action="">
    <h3 class="alinhamento-titulo">FICHA CAPTAÇÃO DE INQUILINO - NÃO RESIDENCIAL<h3>

    <section class="alinhamento-texto" style="font-size: 19px">
        <div class="contrato-card">
            <div class="row">
                Nome:<input style='width: auto'>
            </div><br>
            <div class="row">
                Estado Civil:<input> 
                Profissão:<input>
            </div><br>
                <h4 class="alinhamento-titulo"><bold>Telefones</bold> </h4>
                <div class="row">
                    Comercial: <input> 	Pessoal:<input> 
                </div>
            </div><br>

            <div class="contrato-card">
                <div class="row">
                    Nome:<input>
                </div><br>
                <div class="row">
                    Estado Civil:<input> 
                    Profissão:<input>
                </div><br>
                    <h4 class="alinhamento-titulo"><bold>Telefones</bold> </h4>
                    <div class="row">
                        Comercial: <input> 	Pessoal:<input> 
                    </div>
            </div><br>

            <div class="contrato-card">
            <div class="row">
                Valor:<input> 
            </div><br>
                <div class="row">
                    Depósito (<input style="width:10px">):<input> 
                    Fiador (<input style="width:10px">):<input>
                </div><br>
            </div><br>
            <div class="contrato-card">
                <div class="row">
                    Data vencimento:<input style='width: auto'><br>
                </div>
                <div class="row">
                    Tempo de contrato:<input style='width: auto'><br>
                </div>
                <div class="row">
                    Finalidade:<input style='width: auto'><br>
                </div>
            </div><br>

            <div class="contrato-card">
                <h4 class="alinhamento-titulo">Referências</h4>
                    <div class="row">
                        Nome:<input> 
                        Telefone:<input>
                    </div><br>
                    <div class="row">
                        Grau de parentesco:<input style='width: auto'><br>
                    </div><br>
                    <div class="row">
                        Nome:<input> 
                        Telefone:<input>
                    </div><br>
                    <div class="row">
                        Grau de parentesco:<input style='width: auto'><br>
                    </div>
            </div><br>
            <div class="contrato-card">
                <h4 class="alinhamento-titulo">Documentos necessários</h4>
                <ul>
                    <li>Xerox ( RG e CPF )</li>
                    <li>Taxa R$ 60,00 (pesquisa CPF) por pessoa (Esse valor não será devolvido em hipótese alguma)</li>
                    <li>Se for comercial comprovante de endereço</li>
                    <li>Caso houver desistência depois do contrato feito, será cobrado R$ 150,00 (CENTO E CINQUENTA REAIS) pelo contrato.</li>
                </ul><br><br>


                <div class="alinhamento-titulo">________________________</div>
                <div class="alinhamento-titulo">Ass.: Locatário<div>
        </div>
    </section><br>
    <div class="alinhamento-titulo">
        <button onclick="window.print()" class="btn btn-primary imovel-btn-print py-2 hide-print">Imprimir</button>
    </div>
    </form>
</section>
@endsection