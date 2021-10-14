@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    <form action="{{route('loc-novo-imovel')}}" method="POST">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Imóvel</h3>
            </div>
            <div class="card-body">
                <div class="form-group col-lg-3">
                    <label for="exampleInputEmail1">Valor</label>
                    <input type="text" name="valor" class="form-control" id="exampleInputEmail1" placeholder="Qual o valor de aluguel do imóvel?">
                </div><br> 
                <h5>Endereço</h5>
                <div class="form-group">
                    <label for="exampleInputPassword1">Logradouro</label>
                    <input type="text" name="rua" class="form-control" id="exampleInputPassword1" placeholder="Rua...">
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Número</label>
                        <input type="text" name="numero" class="form-control" id="exampleInputPassword1" placeholder="Número">
                    </div>
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="exampleInputPassword1" placeholder="Bairro">
                    </div>
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Município</label>
                        <input type="text" name="municipio" class="form-control" id="exampleInputPassword1" placeholder="Município">
                    </div>
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="exampleInputPassword1" placeholder="Complemento">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Metragem Total</label>
                        <input type="text" name="metragemTot" class="form-control" id="exampleInputPassword1" placeholder="Metragem total">
                    </div>
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Metragem útil</label>
                        <input type="text"  name="metragemUtil" class="form-control" id="exampleInputPassword1" placeholder="Metragem útil">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="form-group col-lg-3">
                        <label for="exampleInputPassword1">Quantidade de Cômodos</label>
                        <input type="number" name="qtdCom" class="form-control" id="exampleInputPassword1" placeholder="Cômodos">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Quartos</label>
                        <input type="number" name="quartos" class="form-control" id="exampleInputPassword1" placeholder="Quartos">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Suíte</label>
                            <input type="number" name="suites" class="form-control" id="exampleInputPassword1" placeholder="Suíte">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Cozinha</label>
                            <input type="number" name="cozinhas" class="form-control" id="exampleInputPassword1" placeholder="Cozinha">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Lavanderia</label>
                            <input type="number" name="lavanderia" class="form-control" id="exampleInputPassword1" placeholder="Lavanderia">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Sala de Estar</label>
                            <input type="number" name="salaEstar" class="form-control" id="exampleInputPassword1" placeholder="Sala de Estar">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Sala de Jantar</label>
                            <input type="number" name="salaJantar" class="form-control" id="exampleInputPassword1" placeholder="Sala de Jantar">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Banheiros</label>
                            <input type="number" name="banheiros" class="form-control" id="exampleInputPassword1" placeholder="Banheiros">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Vagas de Garagem</label>
                            <input type="number" name="vagas" class="form-control" id="exampleInputPassword1" placeholder="Vagas de Garagem">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Escritório</label>
                            <input type="number" name="escritorio" class="form-control" id="exampleInputPassword1" placeholder="Escritório">
                    </div>
                    <div class="form-group mx-1">
                            <label for="exampleInputPassword1">Jardim</label>
                            <input type="number" name="jardim" class="form-control" id="exampleInputPassword1" placeholder="Jardim">
                    </div>
                    <div class="form-group mx-1">
                            <label for="teste">Varanda/sacada</label>
                            <input type="number" name="varanda" class="form-control" id="teste" placeholder="Varanda/sacada">
                    </div>
                </div><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label name="aguaLuz" class="form-check-label">Agua e luz separada?</label>
                </div>
                <br>
                <div class="form-group col-lg-2">
                    <label for="exampleInputPassword1">RGI</label>
                    <input  type="text" name="rgi" class="form-control" id="exampleInputPassword1" placeholder="RGI">
                </div>
                <div class="form-group col-lg-2">
                    <label for="exampleInputPassword1">Instalação</label>
                    <input type="text" name="instalacao" class="form-control" id="exampleInputPassword1" placeholder="Instalação">
                </div>
                <div class="form-group col-lg-2">
                    <label for="exampleInputPassword1">IPTU</label>
                    <input type="text" name="iptu" class="form-control" id="exampleInputPassword1" placeholder="IPTU">
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label name="condominioCheck" class="form-check-label">Condomínio?</label>
                </div>
                <br>
                <div class="row">
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Valor do condomínio</label>
                        <input type="text" name="condominioVal" class="form-control" id="exampleInputPassword1" placeholder="Valor do condomínio">
                    </div>
                    <div class="form-group mx-1">
                        <label for="exampleInputPassword1">Andar</label>
                        <input type="number" name="andar" class="form-control" id="exampleInputPassword1" placeholder="Andar">
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label name="mobiliado" class="form-check-label">Mobiliado?</label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label name="pet" class="form-check-label">Aceita Pet?</label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label name="opcVenda" class="form-check-label">Opção de Venda?</label>
                </div>
                <br>
            </div>
        </div>
        
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Informações adicionais</h3>
            </div><br>
            <h5 class="mx-3">Descrições</h5>
            <textarea class="mx-3 my-2" placeholder="Descrição sobre o Imóvel"></textarea>
            <br>
            <textarea class="mx-3 my-2" placeholder="Descrição sobre a mobília"></textarea>
            <br>
            <textarea class="mx-3 my-2" placeholder="Descrição sobre o condomínio"></textarea>
            <br>
            <textarea class="mx-3 my-2" placeholder="Observações"></textarea>
            <div class="form-group mx-3 col-lg-4">
                <label for="exampleInputFile">Subir as fotos</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Buscar</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Subir</span>
                    </div>
                </div>
            </div>
            <div class="row">
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
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/template.scss')}}"/>
@endsection
@section('js')
    
@endsection