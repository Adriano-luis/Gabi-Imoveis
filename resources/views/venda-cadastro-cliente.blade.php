@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    <div class="formulario">
        <form action="{{route('ven-novo-cliente')}}" method="POST">
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
                        <input type="text" name="idImovel" class="form-control" id="idImovel"  value="{{isset($id) && $id !='' ? $id : '' }}">
                    </div><br> 
                    <h5>Dados do locator</h5>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do locator">
                    </div>
                    <div class="form-group">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Endereço do locator">
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
                    <br>
                    <div class="form-group col-lg-3">
                            <label>Estado civíl</label>
                            <select class="custom-select" name="estadoCivil">
                                <option value="solteiro">Solteiro</option>
                                <option value="casado">Casado</option>
                                <option value="separado">Separado </option>
                                <option value="divorciado">Divorciado </option>
                                <option value="viuvo">Viúvo</option>
                            </select>
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="profissao"> Data de nascimento</label>
                        <input  type="date" name="nascimento" class="form-control" id="nascimento">
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="profissao">Profissão</label>
                        <input  type="text" name="profissao" class="form-control" id="profissao" placeholder="Profissão">
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF">
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="rg">RG</label>
                        <input type="text" name="rg" class="form-control" id="rg" placeholder="RG">
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="telefone">Telefone</label>
                        <input type="phone" name="telefone" class="form-control" id="telefone" placeholder="(dd)x xxxx-xxxx">
                    </div>
                    <br>
                    <h5>Dados de Conta Bancária</h5>
                    <div class="form-group col-lg-2">
                        <label for="banco">Banco</label>
                        <input type="text" name="banco" class="form-control" id="banco" placeholder="">
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label for="agencia">Agência</label>
                            <input type="text" name="agencia" class="form-control" id="agencia" placeholder="Agência">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Tipo de Conta</label>
                            <select class="custom-select" name="tipoConta">
                                <option value="corrente">Conta Corrente</option>
                                <option value="poupanca">Conta Poupança</option>
                                <option value="salario">Conta Salário</option>
                                <option value="digital">Conta Digital</option>
                                <option value="universitaria">Conta Universitária</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label for="conta">Conta</label>
                            <input type="text" name="conta" class="form-control" id="conta" placeholder="Conta">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="pix">PIX</label>
                            <input type="text" name="pix" class="form-control" id="pix" placeholder="PIX">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection