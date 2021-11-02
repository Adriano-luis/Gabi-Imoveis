@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    @if (isset($id))
        <input type="hidden" id="cadastrado" value="Sim">
    @endif
    <form action="{{route('loc-novo-imovel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Imóvel Locação</h3>
            </div>
            <div class="card-body">
                @if (isset($existeImovel))
                    <div>{{$existeImovel}}</div>
                @endif
                <input type="hidden" name="idLocador" value="{{$id ?? ''}}">
                <div class="form-group col-lg-3">
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" class="form-control" id="valor" placeholder="Qual o valor de aluguel do imóvel?">
                </div><br> 
                <h5>Endereço</h5>
                <div class="form-group">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" name="rua" class="form-control" id="logradouro" placeholder="Rua...">
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="numero">Número</label>
                        <input type="text" name="numero" class="form-control" id="numero" placeholder="Número">
                    </div>
                    <div class="form-group mx-1">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group mx-1">
                        <label for="municipio">Município</label>
                        <input type="text" name="municipio" class="form-control" id="municipio" placeholder="Município">
                    </div>
                    <div class="form-group mx-1">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Complemento">
                    </div>
                </div>
                <div class="form-group mx-1">
                    <label for="metragemTot">Metragem Total</label>
                    <input type="text" name="metragemTot" class="form-control" id="metragemTot" placeholder="m²">
                </div><br><br>
                <div class="row">
                    <div class="form-group col-lg-3">
                        <label for="qtdCom">Quantidade de Cômodos</label>
                        <input type="number" name="qtdCom" class="form-control" id="qtdCom" placeholder="Cômodos">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="quartos">Quartos</label>
                        <input type="number" name="quartos" class="form-control" id="quartos" placeholder="Quartos">
                    </div>
                    <div class="form-group mx-1">
                            <label for="suites">Suíte</label>
                            <input type="number" name="suites" class="form-control" id="suites" placeholder="Suíte">
                    </div>
                    <div class="form-group mx-1">
                            <label for="cozinha">Cozinha</label>
                            <input type="number" name="cozinhas" class="form-control" id="cozinha" placeholder="Cozinha">
                    </div>
                    <div class="form-group mx-1">
                            <label for="lavanderia">Lavanderia</label>
                            <input type="number" name="lavanderia" class="form-control" id="lavanderia" placeholder="Lavanderia">
                    </div>
                    <div class="form-group mx-1">
                            <label for="salaEstar">Sala de Estar</label>
                            <input type="number" name="salaEstar" class="form-control" id="salaEstar" placeholder="Sala de Estar">
                    </div>
                    <div class="form-group mx-1">
                            <label for="salajantar">Sala de Jantar</label>
                            <input type="number" name="salaJantar" class="form-control" id="salajantar" placeholder="Sala de Jantar">
                    </div>
                    <div class="form-group mx-1">
                            <label for="banheiros">Banheiros</label>
                            <input type="number" name="banheiros" class="form-control" id="banheiros" placeholder="Banheiros">
                    </div>
                    <div class="form-group mx-1">
                            <label for="vagas">Vagas de Garagem</label>
                            <input type="number" name="vagas" class="form-control" id="vagas" placeholder="Vagas de Garagem">
                    </div>
                    <div class="form-group mx-1">
                            <label for="escritorio">Escritório</label>
                            <input type="number" name="escritorio" class="form-control" id="escritorio" placeholder="Escritório">
                    </div>
                    <div class="form-group mx-1">
                            <label for="jardim">Jardim</label>
                            <input type="number" name="jardim" class="form-control" id="jardim" placeholder="Jardim">
                    </div>
                    <div class="form-group mx-1">
                            <label for="varanda">Varanda/sacada</label>
                            <input type="number" name="varanda" class="form-control" id="varanda" placeholder="Varanda/sacada">
                    </div>
                </div><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="aguaLuz">
                    <label name="aguaLuz" class="form-check-label">Agua e luz separada?</label>
                </div>
                <br>
                <div class="form-group col-lg-2">
                    <label for="rgi">RGI</label>
                    <input  type="text" name="rgi" class="form-control" id="rgi" placeholder="RGI">
                </div>
                <div class="form-group col-lg-2">
                    <label for="instalacao">Instalação</label>
                    <input type="text" name="instalacao" class="form-control" id="instalacao" placeholder="Instalação">
                </div>
                <div class="form-group col-lg-2">
                    <label for="iptu">IPTU</label>
                    <input type="text" name="iptu" class="form-control" id="iptu" placeholder="IPTU">
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="condominioCheck">
                    <label name="condominioCheck" class="form-check-label">Condomínio?</label>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-lg-5">
                        <label for="condominioNome">Nome do condomínio</label>
                        <input type="text" name="condominioNome" class="form-control" id="condominioNome" placeholder="Nome do condomínio">
                    </div>
                    <div class="form-group mx-1">
                        <label for="condominioVal">Valor do condomínio</label>
                        <input type="text" name="condominioVal" class="form-control" id="condominioVal" placeholder="Valor do condomínio">
                    </div>
                    <div class="form-group mx-1">
                        <label for="andar">Andar</label>
                        <input type="number" name="andar" class="form-control" id="andar" placeholder="Andar">
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="individual">
                    <label name="individual" class="form-check-label">Individual?</label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="mobiliado">
                    <label name="mobiliado" class="form-check-label">Mobiliado?</label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="pet">
                    <label name="pet" class="form-check-label">Aceita Pet?</label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="resiCheck">
                    <label name="resiCheck" class="form-check-label">Residencial?</label>
                </div>
                <br>
            </div>
        </div>
        
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Informações adicionais</h3>
            </div><br>
            <h5 class="mx-3">Descrições</h5>
            <textarea name="descricaoImovel" class="mx-3 my-2" placeholder="Descrição sobre o Imóvel"></textarea>
            <br>
            <textarea name="descricaoMobilia" class="mx-3 my-2" placeholder="Descrição sobre a mobília"></textarea>
            <br>
            <textarea name="descricaoCond" class="mx-3 my-2" placeholder="Descrição sobre o condomínio"></textarea>
            <br>
            <textarea name="observacao" class="mx-3 my-2" placeholder="Observações"></textarea>
            <div class="form-group mx-3 col-lg-4">
                <label for="InputArquivo">Subir as fotos</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="upFotos[]" id="InputArquivo" accept="image/png, image/jpeg"  multiple>
                        <label name="upFotos" class="custom-file-label" for="InputArquivo">Buscar</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Subir</span>
                    </div>
                </div>
            </div>
            <div class="row align-btn">
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Imprimir</button>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection