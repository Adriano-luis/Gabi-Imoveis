@extends('adminlte::page')
@section('content')
    <section class="lista-clientes-editar">
        <div>
        <form action="{{ route('cliente-editar')}}" method="GET">
            @csrf
            <input type="hidden" name="id" value="{{$cliente->id}}">
            <div class="form-group" style="margin-left: 0.4rem;">
                <label> Nome do Cliente</label>
                <input type="text"  class="form-control" name="NomeCliente"  value="{{$cliente->nome}}" placeholder="Nome Completo">
            </div>
            <div class="row" style="margin-left: 0.4rem;">
                <div class="form-group">
                    <label> Telefone do cliente</label>
                    <input type="text"  class="form-control col-7" name="TelefoneCliente" value="{{$cliente->telefone}}" placeholder="(dd)x xxxx-xxxx">
                </div>
                <div class="form-group">
                    <label>Tipo de Imóvel</label><br>
                    <select class="custom-select col-12" name="tipo">
                        <option value="residencial" {{$cliente->tipo =='residencial' ? "selected='selected'" : ''}}> Residencial</option>
                        <option value="nResidencial" {{$cliente->tipo =='nResidencial' ? "selected='selected'"  : ''}}>Não residencial</option>
                        <option value="apartamento" {{$cliente->tipo =='apartamento' ? "selected='selected'"  : ''}}>Apartamento </option>
                        <option value="casa" {{$cliente->tipo =='casa' ? "selected='selected'"  : ''}}>Casa </option>
                        <option value="chacara" {{$cliente->tipo =='chacara' ? "selected='selected'"  : ''}}>Chácara</option>
                        <option value="terreno" {{$cliente->tipo =='terreno' ? "selected='selected'"  : ''}}>Terreno</option>
                    </select>
                </div>
            </div>
            <div class="row">
            <div class="row">
                <div class="form-group mx-3 col-3">
                    <label>Valor</label>
                    <input type="text" name="valorMin" class="form-control" value="{{$cliente->valorMin}}" placeholder="Minímo">
                </div>
                <div class="form-group  col-1" style="padding-top: 0.5rem">
                    <label>&nbsp;</label>
                    <label>&nbsp;</label>
                    Até
                </div>
                <div class="form-group mx-3 col-3">
                    <label> &nbsp;</label>
                    <input type="text" name="valorMax" class="form-control" value="{{$cliente->valorMax}}" placeholder="Máximo">
                </div>
            </div>
            </div>
            <div class="form-group" style="margin-left: 0.4rem" >
                <label for="rua">Rua</label>
                <input type="text" name="rua" class="form-control" id="rua" value="{{$cliente->endereco}}" placeholder="Rua">
            </div>
            <div class="row" style="margin-left: -1em">
            <div class="form-group mx-3 col-6">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="bairro" value="{{$cliente->bairro}}" placeholder="bairro">
            </div>
            <div class="form-group mx-3 col-4">
                <label for="municipio">Metragem</label>
                <input type="text" name="metragemTot" class="form-control" id="Metragem" value="{{$cliente->metragemTotal}}" placeholder="m²">
            </div>
            </div>
            <div class="row">
                <div class="form-group mx-3 col-5">
                    <label for="qtCom">Quatidade de comodos</label>
                    <input type="number" name="qtCom" class="form-control" id="qtCom" value="{{$cliente->qtComodos}}" placeholder="Quatidade de comodos">
                </div>
                <div class="form-group mx-3 col-5">
                    <label for="qtQuarto">Quatidade de quarto</label>
                    <input type="number" name="qtQuartos" class="form-control" id="qtQuarto" value="{{$cliente->quarto}}" placeholder="Quatidade de quartos">
                </div>
            </div><br>
            <label for="obs">Observações</label>
            <input type="text" class="form-control" name="obs" id="obs" value="{{$cliente->observacoes}}"><br>
            <div class="row">
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="individualCheck" {{$cliente->individual == 'Sim' ? "checked='checked'":''}}>
                    <label name="individualCheck" class="form-check-label"><h5>Individual<h5></label>
                </div><br>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="condominioCheck" {{$cliente->condominio == 'Sim' ? "checked='checked'":''}}>
                    <label name="condominioCheck" class="form-check-label"><h5>Condomínio<h5></label>
                </div><br>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="mobiliado" {{$cliente->mobilhado == 'Sim' ? "checked='checked'":''}}>
                    <label name="mobiliado" class="form-check-label"><h5>Mobiliado</h5></label>
                </div><br>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="disponivel" {{$cliente->disponivel == 'Sim' ? "checked='checked'":''}}>
                    <label name="disponivel" class="form-check-label"><h5>Disponível</h5></label>
                </div><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>  
    </div> 
    </section>
@endsection