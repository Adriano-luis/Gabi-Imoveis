@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    @if (isset($id))
        <input type="hidden" id="cadastrado" value="Sim">
    @endif
    <form action="{{ isset($dados) ? route('ven-editar-imovel-post') : route('ven-novo-imovel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Imóvel Venda</h3>
            </div>
            <div class="card-body">
                @if (isset($existeImovel))
                    <div>{{$existeImovel}}</div>
                @endif
                <input type="hidden" name="id" value="{{isset($dados) ? $dados->id : ''}}">
                <input type="hidden" name="idVendedor" value="{{$id ?? $dados->idVendedor}}">
                <div class="form-group col-lg-3">
                    <label for="valor">Valor</label>
                    <input required type="text" name="valor" class="form-control formatValor" id="valor" value="{{isset($dados) ? $dados->valor: ''}}" placeholder="Valor avaliado do imóvel?">
                </div><br> 
                <h5>Endereço</h5>
                <div class="form-group">
                    <label for="logradouro">Logradouro</label>
                    <input required type="text" name="rua" class="form-control" id="logradouro" value="{{isset($dados) ? $dados->endereco: ''}}" placeholder="Rua...">
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="numero">Número</label>
                        <input type="text" name="numero" class="form-control" id="numero" value="{{isset($dados) ? $dados->numero: ''}}" placeholder="Número">
                    </div>
                    <div class="form-group mx-1">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="bairro" value="{{isset($dados) ? $dados->bairro: ''}}" placeholder="Bairro">
                    </div>
                    <div class="form-group mx-1">
                        <label for="municipio">Município</label>
                        <input type="text" name="municipio" class="form-control" id="municipio" value="{{isset($dados) ? $dados->municipio: ''}}" placeholder="Município">
                    </div>
                    <div class="form-group mx-1">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="complemento" value="{{isset($dados) ? $dados->complemento: ''}}" placeholder="Complemento">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="terreno">Terreno Livre</label>
                        <input type="text"  name="terreno" class="form-control" id="terreno" value="{{isset($dados) ? $dados->terreno: ''}}" placeholder="m²">
                    </div>
                    <div class="form-group mx-1">
                        <label for="metragemTot">Metragem Total</label>
                        <input type="text" name="metragemTot" class="form-control" id="metragemTot" value="{{isset($dados) ? $dados->metragemTotal: ''}}" placeholder="m²">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="form-group col-lg-3">
                        <label for="qtdCom">Quantidade de Cômodos</label>
                        <input type="number" name="qtdCom" class="form-control" id="qtdCom" value="{{isset($dados) ? $dados->qtComodos: ''}}" placeholder="Cômodos">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="quartos">Quartos</label>
                        <input type="number" name="quartos" class="form-control" id="quartos" value="{{isset($dados) ? $dados->quarto: ''}}" placeholder="Quartos">
                    </div>
                    <div class="form-group mx-1">
                            <label for="suites">Suíte</label>
                            <input type="number" name="suites" class="form-control" id="suites" value="{{isset($dados) ? $dados->suite: ''}}" placeholder="Suíte">
                    </div>
                    <div class="form-group mx-1">
                            <label for="cozinha">Cozinha</label>
                            <input type="number" name="cozinhas" class="form-control" id="cozinha" value="{{isset($dados) ? $dados->cozinha: ''}}" placeholder="Cozinha">
                    </div>
                    <div class="form-group mx-1">
                            <label for="lavanderia">Lavanderia</label>
                            <input type="number" name="lavanderia" class="form-control" id="lavanderia" value="{{isset($dados) ? $dados->lavanderia: ''}}" placeholder="Lavanderia">
                    </div>
                    <div class="form-group mx-1">
                            <label for="salaEstar">Sala de Estar</label>
                            <input type="number" name="salaEstar" class="form-control" id="salaEstar" value="{{isset($dados) ? $dados->salaEstar: ''}}" placeholder="Sala de Estar">
                    </div>
                    <div class="form-group mx-1">
                            <label for="salajantar">Sala de Jantar</label>
                            <input type="number" name="salaJantar" class="form-control" id="salajantar" value="{{isset($dados)? $dados->salaJantar: ''}}" placeholder="Sala de Jantar">
                    </div>
                    <div class="form-group mx-1">
                            <label for="banheiros">Banheiros</label>
                            <input type="number" name="banheiros" class="form-control" id="banheiros" value="{{isset($dados) ? $dados->banheiro: ''}}" placeholder="Banheiros">
                    </div>
                    <div class="form-group mx-1">
                            <label for="vagas">Vagas de Garagem</label>
                            <input type="number" name="vagas" class="form-control" id="vagas" value="{{isset($dados) ? $dados->garagem: ''}}" placeholder="Vagas de Garagem">
                    </div>
                    <div class="form-group mx-1">
                            <label for="escritorio">Escritório</label>
                            <input type="number" name="escritorio" class="form-control" id="escritorio" value="{{isset($dados) ? $dados->escritorio: ''}}" placeholder="Escritório">
                    </div>
                    <div class="form-group mx-1">
                            <label for="jardim">Jardim</label>
                            <input type="number" name="jardim" class="form-control" id="jardim" value="{{isset($dados) ? $dados->jardim: ''}}" placeholder="Jardim">
                    </div>
                    <div class="form-group mx-1">
                            <label for="varanda">Varanda/sacada</label>
                            <input type="number" name="varanda" class="form-control" id="varanda" value="{{isset($dados) ? $dados->varanda: ''}}" placeholder="Varanda/sacada">
                    </div>
                </div><br>
                <div class="form-group">
                    <label name="aguaLuz" class="form-check-label">Cadastro feito em:</label><br>
                    <input class="form-control col-2" type="date" name="criado" value="{{isset($dados) ? $dados->criado: ''}}">
                </div>
                <label>Documentos</label>
                <div class="row align-row">
                    <div class="form-check ms-3 px-3">
                        <input class="form-check-input " type="checkbox" name="contrato" {{isset($dados) && $dados->contrato == 'Sim' ? "checked='checked'": ''}}>
                        <label name="contrato" class="form-check-label">Contrato</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="escritura" {{isset($dados) && $dados->escritura == 'Sim' ? "checked='checked'": ''}}>
                        <label name="escritura" class="form-check-label">Escritura</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="contratoPoss" {{isset($dados) && $dados->contratoPoss == 'Sim' ? "checked='checked'": ''}}>
                        <label name="contratoPoss" class="form-check-label">Contrato possessório</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="usocapiao" {{isset($dados) && $dados->usocapiao == 'Sim' ? "checked='checked'": ''}}>
                        <label name="usocapiao" class="form-check-label">Escritura Usocapião</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="outros" {{isset($dados) && $dados->outros == 'Sim' ? "checked='checked'": ''}}>
                        <label name="outros" class="form-check-label">Outros</label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="terreno">IPTU</label>
                        <input type="text"  name="iptu" class="form-control" id="iptu" value="{{isset($dados) ? $dados->iptu: ''}}">
                    </div>
                </div><br>
                <label>Tipo</label>
                <div class="row align-row">
                    <div class="form-check ms-3 px-3">
                        <input class="form-check-input " type="checkbox" name="apCheck" {{isset($dados) && $dados->tipo == 'apartamento' ? "checked='checked'": ''}}>
                        <label name="apCheck" class="form-check-label text-danger">Apartamento</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="casaCheck" {{isset($dados) && $dados->tipo == 'casa' ? "checked='checked'": ''}}>
                        <label name="casaCheck" class="form-check-label text-danger">Casa</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="chacaCheck" {{isset($dados) && $dados->tipo == 'chacara' ? "checked='checked'": ''}}>
                        <label name="chacaCheck" class="form-check-label text-danger">Chacara</label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="terreCheck" {{isset($dados) && $dados->tipo == 'terreno' ? "checked='checked'": ''}}>
                        <label name="terreCheck" class="form-check-label text-danger">Terreno</label>
                    </div>
                </div><br><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="condominioCheck" {{isset($dados) && $dados->condominio == 'Sim' ? "checked='checked'": ''}}>
                    <label name="condominioCheck" class="form-check-label">Condomínio?</label>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-lg-5">
                        <label for="condominioNome">Nome do condomínio</label>
                        <input type="text" name="condominioNome" class="form-control" id="condominioNome" value="{{isset($dados) ? $dados->nomeCondominio: ''}}" placeholder="Nome do condomínio">
                    </div>
                    <div class="form-group mx-1">
                        <label for="condominioVal">Valor do condomínio</label>
                        <input type="text" name="condominioVal" class="form-control formatValor" id="condominioVal" value="{{isset($dados) ? $dados->valorCondominio: ''}}" placeholder="Valor do condomínio">
                    </div>
                    <div class="form-group mx-1">
                        <label for="andar">Andar</label>
                        <input type="number" name="andar" class="form-control" id="andar" value="{{isset($dados) ? $dados->andar: ''}}" placeholder="Andar">
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="mobiliado" {{isset($dados) && $dados->condominio == 'Sim' ? "checked='checked'": ''}}>
                    <label name="mobiliado" class="form-check-label">Mobiliado?</label>
                </div><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="desdobro" {{isset($dados) && $dados->desdobro == 'Sim' ? "checked='checked'": ''}}>
                    <label name="mobiliado" class="form-check-label">Desdobro?</label>
                </div><br>
                @if (isset($dados))
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="disponivel" {{isset($dados) && $dados->disponivel == 'Sim' ? "checked='checked'": ''}}>
                        <label name="pet" class="form-check-label">Disponível?</label>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Informações adicionais</h3>
            </div><br>
            <h5 class="mx-3">Descrições</h5>
            <textarea name="descricaoImovel" class="mx-3 my-2" placeholder="Descrição sobre o Imóvel">{{isset($dados) ? $dados->sobreImovel: ''}}</textarea>
            <br>
            <textarea name="descricaoMobilia" class="mx-3 my-2" placeholder="Descrição sobre a mobília">{{isset($dados) ? $dados->sobreMobilia: ''}}</textarea>
            <br>
            <textarea name="descricaoCond" class="mx-3 my-2" placeholder="Descrição sobre o condomínio">{{isset($dados) ? $dados->sobreCondominio: ''}}</textarea>
            <br>
            <textarea name="observacao" class="mx-3 my-2" placeholder="Observações">{{isset($dados) ? $dados->observacoes : ''}}</textarea>
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
                @if (isset($dados))
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Atualizar</button>
                    </div> 
                @else
                    <div class="card-footer">
                        <button type="submit" id="checkBtn" class="btn btn-primary">Salvar</button>
                    </div>
                @endif
            </div>
        </div>
    </form>
@endsection