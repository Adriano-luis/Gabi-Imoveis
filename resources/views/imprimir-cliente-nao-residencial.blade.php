<section class="imprimir">
    <form action="{{route('imprimir-captacao-inquilino-nao-residencial')}}">
    <h3 class="alinhamento-titulo">FICHA CAPTAÇÃO DE INQUILINO NÃO - RESIDENCIAL<h3>

    <section class="alinhamento-texto">
        <div class="contrato-card">
            Nome:<input><br>

            Estado Civil: ______________________Profissão: _______________________<br>
            <h4 class="alinhamento-titulo">Telefones: </h4>
            Comercial _____________________	Pessoal  ___________________________
        </div><br>

        <div class="contrato-card">
            Nome:_____________________________________________________________<br>

            Estado Civil: ____________________Profissão:  __________________________<br>
            Telefones:
            Comercial _____________________Pessoal ______________________________<br>
        </div><br>
        <div class="contrato-card">
            Valor:  ________________________	<br>

            Deposito ( ) _____________________Fiador ( ) ___________________________<br>
            </div><br>
            <div class="contrato-card">
            Data vencimento:  ________________	<br>

            Tempo de contrato:______________________________	
            

            Finalidade: _______________________________________________
        </div><br>

        <div class="contrato-card">
            <h4 class="alinhamento-titulo">Referências</h4>
                Nome: _________________________________Fone___________________ <br>Grau de parentesco  _______________________________<br>
                Nome:__________________________________Fone _______________________<br>
                Grau de parentesco  __________________________<br>
        </div><br>
        <div class="contrato-card">
            <h4 class="alinhamento-titulo">Documentos necessários</h4>
            <ul>
                <li>Xerox ( RG e CPF )</li>
                <li>Taxa R$ 50,00 (pesquisa CPF) por pessoa (Esse valor não será devolvido em hipótese alguma)</li>
                <li>Se for comercial comprovante de endereço</li>
                <li>Caso houver desistência depois do contrato feito, será cobrado R$ 150,00 (cento e cinquenta reais) pelo contrato.</li>
            </ul><br><br>


            <div class="alinhamento-titulo">________________________</div>
            <div class="alinhamento-titulo">Ass.: Locatário<div>
        </div>
    </section>
        <div class="row">
            <button type="submit" class="btn btn-primary imovel-btn-print">Imprimir</button>
            <button type="submit" class="btn btn-primary imovel-btn-print">Editar</button>
        </div>
    </form>
</section>