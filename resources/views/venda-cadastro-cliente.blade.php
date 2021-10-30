@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    <div class="formulario">
        <form action="{{ isset($dados) ? route('ven-editar-cliente-post') : route('ven-novo-cliente')}}" method="POST">
            @csrf
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Proprietário</h3>
                </div>
                <div class="card-body">
                    @if (isset($existeVendedor))
                        <div>{{$existeVendedor}}</div>
                    @endif
                    <div class="form-group col-lg-3">
                        <label for="idImovel">Id Imóvel</label>
                        <input type="text" name="idImovel" class="form-control" id="idImovel"  value="<?php if(isset($idImovel) && $idImovel !=''){echo $idImovel;}else if(isset($dados->idImovel)){ echo $dados->idImovel;}?>">
                    </div><br> 
                    <h5>Dados do proprietário</h5>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" value="{{$dados->nome}}" placeholder="Nome do proprietário">
                    </div>
                    <div class="form-group">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control" value="{{$dados->endereco}}" id="logradouro" placeholder="Endereço do proprietário">
                    </div>
                    <div class="row">
                        <div class="form-group mx-1">
                            <label for="numero">Número</label>
                            <input type="text" name="numero" class="form-control" value="{{$dados->numero}}" id="numero" placeholder="Número">
                        </div>
                        <div class="form-group mx-1">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" value="{{$dados->bairro}}" id="bairro" placeholder="Bairro">
                        </div>
                        <div class="form-group mx-1">
                            <label for="municipio">Município</label>
                            <input type="text" name="municipio" class="form-control" value="{{$dados->municipio}}" id="municipio" placeholder="Município">
                        </div>
                        <div class="form-group mx-1">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" class="form-control" value="{{$dados->complemento}}" id="complemento" placeholder="Complemento">
                        </div>
                    </div>
                    <br>
                    <div class="form-group col-lg-3">
                            <label>Estado civíl</label>
                            <select class="custom-select" name="estadoCivil">
                                <option value="solteiro" {{$dados->estadoCivil == 'solteiro' ? "selected='selected'":''}}>Solteiro</option>
                                <option value="casado" {{$dados->estadoCivil == 'casado' ? "selected='selected'":''}}>Casado</option>
                                <option value="separado" {{$dados->estadoCivil == 'separado' ? "selected='selected'":''}}>Separado </option>
                                <option value="divorciado" {{$dados->estadoCivil == 'divorciado' ? "selected='selected'":''}}>Divorciado </option>
                                <option value="viuvo" {{$dados->estadoCivil == 'viuvo' ? "selected='selected'":''}}>Viúvo</option>
                            </select>
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="profissao"> Data de nascimento</label>
                        <input  type="date" name="nascimento" class="form-control" value="{{$dados->nascimento}}" id="nascimento">
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="profissao">Profissão</label>
                        <input  type="text" name="profissao" class="form-control" value="{{$dados->profissao}}" id="profissao" placeholder="Profissão">
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" value="{{$dados->CPF}}" id="cpf" placeholder="CPF">
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="rg">RG</label>
                        <input type="text" name="rg" class="form-control" value="{{$dados->RG}}" id="rg" placeholder="RG">
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="telefone">Telefone</label>
                        <input type="phone" name="telefone" class="form-control" value="{{$dados->telefone}}" id="telefone" placeholder="(dd)x xxxx-xxxx">
                    </div>
                    <br>
                    <h5>Dados de Conta Bancária</h5>
                    <div class="form-group col-lg-2">
                        <label for="banco">Banco</label>
                        <input type="text" name="banco" class="form-control" value="{{$dados->banco}}" id="banco" placeholder="">
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label for="agencia">Agência</label>
                            <input type="text" name="agencia" class="form-control" value="{{$dados->agencia}}" id="agencia" placeholder="Agência">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Tipo de Conta</label>
                            <select class="custom-select" name="tipoConta">
                                <option value="corrente" {{$dados->tipoConta == 'corrente' ? "selected='selected'":''}}>Conta Corrente</option>
                                <option value="poupanca" {{$dados->tipoConta == 'poupanca' ? "selected='selected'" : ''}}>Conta Poupança</option>
                                <option value="salario" {{$dados->tipoConta == 'salario' ? "selected='selected'" : ''}}>Conta Salário</option>
                                <option value="digital" {{$dados->tipoConta == 'digital' ? "selected='selected'" : ''}}>Conta Digital</option>
                                <option value="universitaria" {{$dados->tipoConta == 'universitaria' ? "selected='selected'" : ''}}>Conta Universitária</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label for="conta">Conta</label>
                            <input type="text" name="conta" class="form-control" value="{{$dados->conta}}" id="conta" placeholder="Conta">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="pix">PIX</label>
                            <input type="text" name="pix" class="form-control" value="{{$dados->pix}}" id="pix" placeholder="PIX">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        @if (isset($dados))
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div> 
                        @else
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection