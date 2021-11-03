@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    <div class="formulario">
        <form action="{{route('loc-novo-cliente')}}" method="POST">
            @csrf
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Locador</h3>
                </div>
                <div class="card-body">
                    @if (isset($existeImovel))
                        <div>{{$existeImovel}}</div>
                    @endif
                    <h5>Dados do locador</h5>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" value="{{isset($dados->nome) ? $dados->nome :''}}" placeholder="Nome do locador">
                    </div>
                    <div class="form-group">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control" id="logradouro" value="{{isset($dados->endereco) ? $dados->endereco :''}}" placeholder="Endereço do locador">
                    </div>
                    <div class="row">
                        <div class="form-group mx-1">
                            <label for="numero">Número</label>
                            <input type="text" name="numero" class="form-control" id="numero" value="{{isset($dados->numero) ? $dados->numero :''}}" placeholder="Número">
                        </div>
                        <div class="form-group mx-1">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="bairro" value="{{isset($dados->bairro) ? $dados->bairro :''}}" placeholder="Bairro">
                        </div>
                        <div class="form-group mx-1">
                            <label for="municipio">Município</label>
                            <input type="text" name="municipio" class="form-control" id="municipio" value="{{isset($dados->municipio) ? $dados->municipio :''}}" placeholder="Município">
                        </div>
                        <div class="form-group mx-1">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="complemento" value="{{isset($dados->complemento) ? $dados->complemento :''}}" placeholder="Complemento">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label>Estado civíl</label>
                            <select class="custom-select" name="estadoCivil">
                                <option value="solteiro" {{ isset($dados->estadoCivil) && $dados->estadoCivil == 'solteiro' ? "selected='selected'":''}}>Solteiro</option>
                                <option value="casado" {{isset($dados->estadoCivil) && $dados->estadoCivil == 'casado' ? "selected='selected'":''}}>Casado</option>
                                <option value="separado" {{isset($dados->estadoCivil) && $dados->estadoCivil == 'separado' ? "selected='selected'":''}}>Separado </option>
                                <option value="divorciado" {{isset($dados->estadoCivil) && $dados->estadoCivil == 'divorciado' ? "selected='selected'":''}}>Divorciado </option>
                                <option value="viuvo" {{isset($dados->estadoCivil) && $dados->estadoCivil == 'viuvo' ? "selected='selected'":''}}>Viúvo</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="profissao"> Data de nascimento</label>
                            <input  type="date" name="nascimento" class="form-control" id="nascimento" value="{{isset($dados->nascimento) ? $dados->nascimento :''}}">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="profissao">Profissão</label>
                            <input  type="text" name="profissao" class="form-control" id="profissao" value="{{isset($dados->profissao) ? $dados->profissao :''}}" placeholder="Profissão">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" class="form-control" id="cpf" value="{{isset($dados->CPF) ? $dados->CPF :''}}" placeholder="CPF">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="rg">RG</label>
                            <input type="text" name="rg" class="form-control" id="rg" value="{{isset($dados->RG) ? $dados->RG :''}}" placeholder="RG">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="telefone">Telefone</label>
                            <input type="phone" name="telefone" class="form-control" id="telefone" value="{{isset($dados->telefone) ? $dados->telefone :''}}" placeholder="(dd)x xxxx-xxxx">
                        </div>
                    </div>
                    <br>
                    <h5>Dados de Conta Bancária</h5>
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label for="banco">Banco</label>
                            <input type="text" name="banco" class="form-control" id="banco" value="{{isset($dados->banco) ? $dados->banco :''}}" placeholder="Banco">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="agencia">Agência</label>
                            <input type="text" name="agencia" class="form-control" id="agencia" value="{{isset($dados->agencia) ? $dados->agencia :''}}" placeholder="Agência">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label>Tipo de Conta</label>
                            <select class="custom-select" name="tipoConta">
                                <option value="corrente" {{isset($dados->tipoConta) && $dados->tipoConta == 'corrente' ? "selected='selected'":''}}>Conta Corrente</option>
                                <option value="poupanca" {{isset($dados->tipoConta) && $dados->tipoConta == 'poupanca' ? "selected='selected'" : ''}}>Conta Poupança</option>
                                <option value="salario" {{isset($dados->tipoConta) && $dados->tipoConta == 'salario' ? "selected='selected'" : ''}}>Conta Salário</option>
                                <option value="digital" {{isset($dados->tipoConta) && $dados->tipoConta == 'digital' ? "selected='selected'" : ''}}>Conta Digital</option>
                                <option value="universitaria" {{isset($dados->tipoConta) && $dados->tipoConta == 'universitaria' ? "selected='selected'" : ''}}>Conta Universitária</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="conta">Conta</label>
                            <input type="text" name="conta" class="form-control" id="conta" value="{{isset($dados->conta) ? $dados->conta :''}}" placeholder="Conta">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="pix">PIX</label>
                            <input type="text" name="pix" class="form-control" id="pix" value="{{isset($dados->pix) ? $dados->pix :''}}" placeholder="PIX">
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-footer">
                            @if (isset($dados))
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Atualizar</button>
                                <a href="{{route('loc-novo-imovel',['id'=>$dados->id])}}" class="btn btn-primary" style="color: #fff">Cadastrar novo imóvel</a>
                            </div> 
                        @else
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if (isset($imoveis))
      <div class="row">
        @foreach ($imoveis as $imovel)
          @if (isset($ray) && isset($ray) && $ray == 'sim')
            <a href="{{route('imovel',['id'=>$imovel['id']])}}">
          @else
            <a href="{{route('imovel',['id'=>$imovel->id])}}"> 
          @endif
          <div class="col-md-3">
            <div class="card card-widget">
              <div class="card-header imoveisCard">
                <div class="user-block">
                  <span class="description">id: {{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}</span>
                  <span class="description">{{isset($ray) && $ray == 'sim' ? $imovel['endereco']:$imovel->endereco}}, {{isset($ray) && $ray == 'sim' ? $imovel['numero']:$imovel->numero}}
                    @if ((isset($imovel->complemento) && $imovel->complemento != '') || (isset($imovel['complemento']) && $imovel['complemento'] != ''))
                      {{ isset($ray) && $ray == 'sim' ? $imovel['complemento']:$imovel->complemento}}
                    @endif
                    <br>{{ isset($ray) && $ray == 'sim' ? $imovel['bairro']:$imovel->bairro}} | {{isset($ray) && $ray == 'sim' ? $imovel['municipio']:$imovel->municipio}}
                  </span>
                  <span class="description">cadastrado {{isset($ray) && $ray == 'sim' ? $imovel['created_at']:$imovel->created_at}} </span>
                </div>
              </div>
      
              <div class="card-body">
                <div id="controleSlide" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset('assets/images/sala3.jpg')}}" alt="comodos">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('assets/images/quarto.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('assets/images/banheiro.jpg')}}" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#controleSlide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#controleSlide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
              </div>
              <div class="card-footer card-comments">
                @if ( isset($ray) && $ray == 'sim')
                  <a href="{{route('imovel',['id'=>$imovel['id']])}}">

                @else
                  <a href="{{route('imovel',['id'=>$imovel->id])}}"> 
                @endif
                  <div class="card-comment d-flex">
                    <i class="fas fa-ruler-combined pt-2"></i>
        
                    <span class="username px-3">
                      {{isset($ray) && $ray == 'sim' ? $imovel['metragemTotal']:$imovel->metragemTotal}} m²
                    </span>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-toilet"></i>
                    <div class="px-3">
                      @if ( (isset($imovel->banheiro) && $imovel->banheiro != null) || (isset($imovel['banheiro']) && $imovel['banheiro'] !=  null))
                        {{isset($ray) && $ray == 'sim' ? $imovel['banheiro']:$imovel->banheiro}} Banheiro(s)

                        @else
                        Nenhum banheiro
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-bed"></i>
                    <div class="px-3">
                      @if (isset($imovel->quarto) || isset($imovel['quarto']))
                        {{isset($ray) && $ray == 'sim' ? $imovel['quarto']:$imovel->quarto}} Quarto(s)
                      @else
                          Nenhum Quarto
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-car"></i>
                    <div class="px-3">
                      @if (isset($imovel->garagem) || isset($imovel['garagem']))
                        {{isset($ray) && $ray == 'sim' ? $imovel['garagem']:$imovel->garagem}} Vagas de Garagem
                      @else
                          Sem Garagem
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i><b>R$</b></i>
                    <div class="px-3">
                        {{ isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor}} (Aluguel)
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <div class="px-3 btn valorTotal">
                      <b>
                      <?php
                        if ((isset($imovel->IPTU) && $imovel->IPTU != null) || (isset($ray) && $ray == 'sim' && $imovel['IPTU'] != null)){
                          if((isset($imovel->valorCondominio) && $imovel->valorCondominio != null) || (isset($ray) && $ray == 'sim' && $imovel['valorCondominio'] != null)) {
                            echo  'Total: R$'.((isset($ray) && $ray == 'sim' ? $imovel['IPTU']:$imovel->IPTU)
                            + (isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor)
                            + (isset($ray) && $ray == 'sim' ? $imovel['valorCondominio']:$imovel->valorCondominio));
                          }else{
                            echo  'Total: R$'.((isset($ray) && $ray == 'sim' ? $imovel['IPTU']:$imovel->IPTU) 
                            + (isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor));
                          }
                        }else{
                          if((isset($imovel->valorCondominio) && $imovel->valorCondominio != null) || (isset($ray) && $ray == 'sim' && $imovel['valorCondominio'] != null)) {
                            echo  'Total: R$'.'<i><b>R$</b></i>'.((isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor) 
                            + (isset($ray) && $ray == 'sim' ? $imovel['valorCondominio']:$imovel->valorCondominio));
                          }else {
                            echo  'Total: R$'.(isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor);
                          }
                        }
                      ?>
                      </b>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </a>
        @endforeach
      </div>
    @endif
</section>

@endsection