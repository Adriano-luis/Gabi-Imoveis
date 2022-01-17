@extends('adminlte::page')
@section('content')
<section class="imprimir">
    <form action="">
    <h3 class="alinhamento-titulo">FICHA CAPTAÇÃO DE INQUILINO - RESIDENCIAL<h3>

    <section class="alinhamento-texto" style="font-size: 19px">
        <div class="contrato-card">
            <div class="row">
                Nome:<input style='width: auto'><br>
            </div>
            <div class="row">
                Estado Civil:<input> 
                Profissão:<input>
            </div>
                <h4 class="alinhamento-titulo"><bold>Telefones</bold> </h4>
                Comercial: <input> 	Pessoal:<input> 
            </div><br>

            <div class="contrato-card">
            <div class="row">
                Nome:<input><br>
            </div>
            <div class="row">
                <p>Estado Civil:</p><input> 
                Profissão:<input>
            </div>
                <h4 class="alinhamento-titulo"><bold>Telefones</bold> </h4>
                Comercial: <input> 	Pessoal:<input> 
            </div><br>
            <div class="contrato-card">
                    <div class="row">
                    Deposito (_<input style="width: 4px">):<input> 
                    Fiador (_<input style="width: 4px">):<input>
                </div><br>
                <div class="contrato-card">
                Data vencimento:<input style='width: auto'><br>
                Tempo de contrato:<input style='width: auto'><br>
                Finalidade:<input style='width: auto'><br>
            </div><br>

            <div class="contrato-card">
                <h4 class="alinhamento-titulo">Referências</h4>
                    <div class="row">
                        Nome:<input> 
                        Telefone:<input>
                    </div>
                    <div class="row">
                        Grau de parentesco:<input style='width: auto'><br>
                    </div><br>
                    <div class="row">
                        Nome:<input> 
                        Telefone:<input>
                    </div>
                    <div class="row">
                        Grau de parentesco:<input style='width: auto'><br>
                    </div>
            </div><br>
            <div class="contrato-card">
                <h4 class="alinhamento-titulo">Documentos necessários</h4>
                <ul>
                    <li>Xerox ( RG e CPF )</li>
                    <li>Taxa R$ <input type="text"> (pesquisa CPF) por pessoa (Esse valor não será devolvido em hipótese alguma)</li>
                    <li>Se for comercial comprovante de endereço</li>
                    <li>Caso houver desistência depois do contrato feito, será cobrado R$ <input type="text"> (<input type="text">) pelo contrato.</li>
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