@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    @if (isset($id))
        <input type="hidden" id="cadastrado" value="Sim">
    @endif
    <form action="{{route('ven-novo-imovel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Imóvel Venda</h3>
            </div>
            <div class="card-body">
                @if (isset($existeImovel))
                    <div>{{$existeImovel}}</div>
                @endif
                <input type="hidden" name="idVendedor" value="{{$id ?? $dados->idVendedor}}">
                <div class="form-group col-lg-3">
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" class="form-control" id="valor" value="{{$dados ? $dados->valor: ''}}" placeholder="Valor avaliado do imóvel?">
                </div><br> 
                <h5>Endereço</h5>
                <div class="form-group">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" name="rua" class="form-control" id="logradouro" value="{{$dados ? $dados->endereco: ''}}" placeholder="Rua...">
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="numero">Número</label>
                        <input type="text" name="numero" class="form-control" id="numero" value="{{$dados ? $dados->numero: ''}}" placeholder="Número">
                    </div>
                    <div class="form-group mx-1">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="bairro" value="{{$dados ? $dados->bairro: ''}}" placeholder="Bairro">
                    </div>
                    <div class="form-group mx-1">
                        <label for="municipio">Município</label>
                        <input type="text" name="municipio" class="form-control" id="municipio" value="{{$dados ? $dados->municipio: ''}}" placeholder="Município">
                    </div>
                    <div class="form-group mx-1">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="complemento" value="{{$dados ? $dados->complemento: ''}}" placeholder="Complemento">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="terreno">Terreno Livre</label>
                        <input type="text"  name="terreno" class="form-control" id="terreno" value="{{$dados ? $dados->terreno: ''}}" placeholder="m²">
                    </div>
                    <div class="form-group mx-1">
                        <label for="metragemTot">Metragem Total</label>
                        <input type="text" name="metragemTot" class="form-control" id="metragemTot" value="{{$dados ? $dados->metragemTotal: ''}}" placeholder="m²">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="form-group col-lg-3">
                        <label for="qtdCom">Quantidade de Cômodos</label>
                        <input type="number" name="qtdCom" class="form-control" id="qtdCom" value="{{$dados ? $dados->qtComodos: ''}}" placeholder="Cômodos">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="quartos">Quartos</label>
                        <input type="number" name="quartos" class="form-control" id="quartos" value="{{$dados ? $dados->quarto: ''}}" placeholder="Quartos">
                    </div>
                    <div class="form-group mx-1">
                            <label for="suites">Suíte</label>
                            <input type="number" name="suites" class="form-control" id="suites" value="{{$dados ? $dados->suite: ''}}" placeholder="Suíte">
                    </div>
                    <div class="form-group mx-1">
                            <label for="cozinha">Cozinha</label>
                            <input type="number" name="cozinhas" class="form-control" id="cozinha" value="{{$dados ? $dados->cozinha: ''}}" placeholder="Cozinha">
                    </div>
                    <div class="form-group mx-1">
                            <label for="lavanderia">Lavanderia</label>
                            <input type="number" name="lavanderia" class="form-control" id="lavanderia" value="{{$dados ? $dados->lavanderia: ''}}" placeholder="Lavanderia">
                    </div>
                    <div class="form-group mx-1">
                            <label for="salaEstar">Sala de Estar</label>
                            <input type="number" name="salaEstar" class="form-control" id="salaEstar" value="{{$dados ? $dados->salaEstar: ''}}" placeholder="Sala de Estar">
                    </div>
                    <div class="form-group mx-1">
                            <label for="salajantar">Sala de Jantar</label>
                            <input type="number" name="salaJantar" class="form-control" id="salajantar" value="{{$dados ? $dados->salaJantar: ''}}" placeholder="Sala de Jantar">
                    </div>
                    <div class="form-group mx-1">
                            <label for="banheiros">Banheiros</label>
                            <input type="number" name="banheiros" class="form-control" id="banheiros" value="{{$dados ? $dados->banheiro: ''}}" placeholder="Banheiros">
                    </div>
                    <div class="form-group mx-1">
                            <label for="vagas">Vagas de Garagem</label>
                            <input type="number" name="vagas" class="form-control" id="vagas" value="{{$dados ? $dados->garagem: ''}}" placeholder="Vagas de Garagem">
                    </div>
                    <div class="form-group mx-1">
                            <label for="escritorio">Escritório</label>
                            <input type="number" name="escritorio" class="form-control" id="escritorio" value="{{$dados ? $dados->escritorio: ''}}" placeholder="Escritório">
                    </div>
                    <div class="form-group mx-1">
                            <label for="jardim">Jardim</label>
                            <input type="number" name="jardim" class="form-control" id="jardim" value="{{$dados ? $dados->jardim: ''}}" placeholder="Jardim">
                    </div>
                    <div class="form-group mx-1">
                            <label for="varanda">Varanda/sacada</label>
                            <input type="number" name="varanda" class="form-control" id="varanda" value="{{$dados ? $dados->varanda: ''}}" placeholder="Varanda/sacada">
                    </div>
                </div><br>
                <label>Documentos</label>
                <div class="row align-row">
                    <div class="form-check ms-3 px-3">
                        <input class="form-check-input " type="checkbox" name="contrato" {{$dados && $dados->contrato == 'Sim' ? "checked='checked'": ''}}>
                        <label name="contrato" class="form-check-label">Contrato</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="escritura" {{$dados && $dados->escritura == 'Sim' ? "checked='checked'": ''}}>
                        <label name="escritura" class="form-check-label">Escritura</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="contratoPoss" {{$dados && $dados->contratoPoss == 'Sim' ? "checked='checked'": ''}}>
                        <label name="contratoPoss" class="form-check-label">Contrato possessório</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="usocapiao" {{$dados && $dados->usocapiao == 'Sim' ? "checked='checked'": ''}}>
                        <label name="usocapiao" class="form-check-label">Escritura Usocapião</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="outros" {{$dados && $dados->outros == 'Sim' ? "checked='checked'": ''}}>
                        <label name="outros" class="form-check-label">Outros</label>
                    </div>
                </div><br><br>
                <label>Tipo</label>
                <div class="row align-row">
                    <div class="form-check ms-3 px-3">
                        <input class="form-check-input " type="checkbox" name="apCheck" {{$dados && $dados->tipo == 'apartamento' ? "checked='checked'": ''}}>
                        <label name="apCheck" class="form-check-label">Apartamento</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="casaCheck" {{$dados && $dados->tipo == 'casa' ? "checked='checked'": ''}}>
                        <label name="casaCheck" class="form-check-label">Casa</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="chacaCheck" {{$dados && $dados->tipo == 'chacara' ? "checked='checked'": ''}}>
                        <label name="chacaCheck" class="form-check-label">Chacara</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="terreCheck" {{$dados && $dados->tipo == 'terreno' ? "checked='checked'": ''}}>
                        <label name="terreCheck" class="form-check-label">Terreno</label>
                    </div>
                </div><br><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="condominioCheck" {{$dados && $dados->condominio == 'Sim' ? "checked='checked'": ''}}>
                    <label name="condominioCheck" class="form-check-label">Condomínio?</label>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-lg-5">
                        <label for="condominioNome">Nome do condomínio</label>
                        <input type="text" name="condominioNome" class="form-control" id="condominioNome" value="{{$dados ? $dados->nomeCondominio: ''}}" placeholder="Nome do condomínio">
                    </div>
                    <div class="form-group mx-1">
                        <label for="condominioVal">Valor do condomínio</label>
                        <input type="text" name="condominioVal" class="form-control" id="condominioVal" value="{{$dados ? $dados->valorCondominio: ''}}" placeholder="Valor do condomínio">
                    </div>
                    <div class="form-group mx-1">
                        <label for="andar">Andar</label>
                        <input type="number" name="andar" class="form-control" id="andar" value="{{$dados ? $dados->andar: ''}}" placeholder="Andar">
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="mobiliado" {{$dados && $dados->condominio == 'Sim' ? "checked='checked'": ''}}>
                    <label name="mobiliado" class="form-check-label">Mobiliado?</label>
                </div>
                <br>
            </div>
        </div>
        
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Informações adicionais</h3>
            </div><br>
            <h5 class="mx-3">Descrições</h5>
            <textarea name="descricaoImovel" class="mx-3 my-2" placeholder="Descrição sobre o Imóvel">{{$dados ? $dados->sobreImovel: ''}}</textarea>
            <br>
            <textarea name="descricaoMobilia" class="mx-3 my-2" placeholder="Descrição sobre a mobília">{{$dados ? $dados->sobreMobilia: ''}}</textarea>
            <br>
            <textarea name="descricaoCond" class="mx-3 my-2" placeholder="Descrição sobre o condomínio">{{$dados ? $dados->sobreCondominio: ''}}</textarea>
            <br>
            <textarea name="observacao" class="mx-3 my-2" placeholder="Observações">{{$dados ? $dados->observacoes : ''}}</textarea>
            <div class="form-group mx-3 col-lg-4">
                <label for="InputArquivo">Subir as fotos</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="upFotos[]" id="InputArquivo" multiple>
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
@endsection