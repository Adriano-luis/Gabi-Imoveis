@extends('adminlte::page')
@section('content')
    
  <section class="home">
    <button class="btn btn-ajust btn-primary my-2" type="button" data-toggle="collapse" data-target="#collapseLoc" aria-expanded="false" aria-controls="collapseExample">
      Filtros Locação
    </button>
    <div class="collapse" id="collapseLoc">
      <div class="card card-body position">
        <div class="pesquisa">
          <form action="{{route('home')}}" method="POST">
            @csrf
            <div class="card-body">
                @if (isset($existeImovel))
                    <div>{{$existeImovel}}</div>
                @endif
                <div class="row">
                  <div class="form-group col-lg-1">
                    <input type="hidden" name="locacao" value="Sim">
                    <label for="idImovel">Id Imóvel</label>
                    <input type="text" name="id" class="form-control" id="idImovel" placeholder="ID imóvel">
                  </div>
                  <div class="form-group col-lg-5">
                    <label> Nome do Cliente</label>
                    <input type="text"  class="form-control" name="NomeCliente" placeholder="Nome Completo">
                  </div>
                  <div class="form-group col-lg-6">
                    <label> Telefone do cliente</label>
                    <input type="text"  class="form-control col-3" name="TelefoneCliente" placeholder="Telefone">
                  </div>
                </div>
                <div class="row">
                  <div class="form-check mx-3">
                      <input class="form-check-input" type="checkbox" name="resiCheck">
                      <label name="resiCheck" class="form-check-label"><h5>Residencial<h5></label>
                    </div><br>
                    <div class="form-check mx-3">
                      <input class="form-check-input" type="checkbox" name="naoResiCheck">
                      <label name="naoResiCheck" class="form-check-label"><h5>Não residencial<h5></label>
                    </div><br>
                  </div>
                <div class="row">
                  <div class="row">
                      <div class="form-group mx-3">
                        <label>Valor</label>
                        <input type="text" name="valorMin" class="form-control" placeholder="Minímo"> 
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group mx-3">
                        <label> &nbsp;</label>
                        <input type="text" name="valorMax" class="form-control" placeholder="Máximo">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group mx-3" style="width: 70%">
                    <label for="rua">Rua</label>
                    <input type="text" name="rua" class="form-control" id="rua" placeholder="Rua">
                  </div>
                  <div class="form-group mx-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="bairro" placeholder="bairro">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group mx-3">
                      <label for="municipio">Metragem</label>
                      <input type="text" name="metragemTot" class="form-control" id="municipio" placeholder="Município">
                  </div>
                </div>
                <div class="row">
                    <div class="form-group mx-3">
                        <label for="qtCom">Quatidade de comodos</label>
                        <input type="number" name="qtCom" class="form-control" id="qtCom" placeholder="Quatidade de comodos">
                    </div>
                    <div class="form-group mx-3">
                        <label for="qtQuarto">Quatidade de quarto</label>
                        <input type="number" name="qtQuartos" class="form-control" id="qtQuarto" placeholder="Quatidade de quartos">
                    </div>
                    <!-- <div class="form-group mx-3">
                        <label for="qtBanheiros">Quatidade de banheiro</label>
                        <input type="number" name="qtBanheiros" class="form-control" id="qtBanheiros" placeholder="Quatidade de banheiro">
                    </div> 
                    <div class="form-group mx-3">
                        <label for="qtVagas">Quatidade de vagas de garagem</label>
                        <input type="number" name="qtVagas" class="form-control" id="qtVagas" placeholder="Qtd de vagas de garagem">
                    </div> -->
                </div><br>
                <div class="row">
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="individualCheck">
                    <label name="individualCheck" class="form-check-label"><h5>Individual?<h5></label>
                  </div><br>
                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="condominioCheck">
                    <label name="condominioCheck" class="form-check-label"><h5>Condomínio?<h5></label>
                  </div><br>

                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="mobiliado">
                    <label name="mobiliado" class="form-check-label"><h5>Mobiliado?</h5></label>
                  </div><br>

                  <!--<div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="pet">
                    <label name="pet" class="form-check-label"><h5>Aceita Pet?</h5></label>
                  </div>--><br>
                </div>
              </div>
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Filtrar</h5></button>
          </form>
        </div>                
      </div>
    </div>

    <button class="btn btn-ajust btn-primary my-2" type="button" data-toggle="collapse" data-target="#collapseVenda" aria-expanded="false" aria-controls="collapseExample">
      Filtros Venda
    </button>
    <div class="collapse" id="collapseVenda">
      <div class="card card-body position">
        <div class="pesquisa">
          <form action="{{route('home')}}" method="POST">
            @csrf
            <div class="card-body">
                @if (isset($existeImovel))
                    <div>{{$existeImovel}}</div>
                @endif
                <div class="row">
                  <div class="form-group col-lg-1">
                    <label for="idImovel">Id Imóvel</label>
                    <input type="text" name="id" class="form-control" id="idImovel" placeholder="ID imóvel">
                  </div>
                  <div class="form-group col-lg-5">
                    <label> Nome do Cliente</label>
                    <input type="text"  class="form-control" id="NomeClienteModal" placeholder="Nome Completo">
                  </div>
                  <div class="form-group col-lg-6">
                    <label> Telefone do cliente</label>
                    <input type="text"  class="form-control col-3" id="TelefoneClienteModal" placeholder="Telefone">
                  </div>
                </div>
                <div class="row">
                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="apCheck">
                    <label name="apCheck" class="form-check-label"><h5>Apartamento<h5></label>
                  </div><br>
                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="casaCheck">
                    <label name="casaCheck" class="form-check-label"><h5>Casa<h5></label>
                  </div><br>
                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="chacaCheck">
                    <label name="chacaCheck" class="form-check-label"><h5>Chácaras<h5></label>
                  </div><br>
                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="terreCheck">
                    <label name="terreCheck" class="form-check-label"><h5>Terreno<h5></label>
                  </div><br>
                </div>
                <div class="row">
                  <div class="row">
                      <div class="form-group mx-3">
                        <label>Valor</label>
                        <input type="text" name="valorMin" class="form-control" placeholder="Minímo"> 
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group mx-3">
                        <label> &nbsp;</label>
                        <input type="text" name="valorMax" class="form-control" placeholder="Máximo">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group mx-3" style="width: 70%">
                    <label for="rua">Rua</label>
                    <input type="text" name="rua" class="form-control" id="rua" placeholder="Rua">
                  </div>
                  <div class="form-group mx-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="bairro" placeholder="bairro">
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="form-group mx-3">
                      <label for="municipio">Metragem</label>
                      <input type="text" name="metragemTot" class="form-control" id="municipio" placeholder="Município">
                  </div>
                </div> -->
                <div class="row">
                    <div class="form-group mx-3">
                        <label for="qtCom">Quatidade de comodos</label>
                        <input type="number" name="qtCom" class="form-control" id="qtCom" placeholder="Quatidade de comodos">
                    </div>
                    <div class="form-group mx-3">
                        <label for="qtQuarto">Quatidade de quarto</label>
                        <input type="number" name="qtQuartos" class="form-control" id="qtQuarto" placeholder="Quatidade de quartos">
                    </div>
                    <!-- <div class="form-group mx-3">
                        <label for="qtBanheiros">Quatidade de banheiro</label>
                        <input type="number" name="qtBanheiros" class="form-control" id="qtBanheiros" placeholder="Quatidade de banheiro">
                    </div> 
                    <div class="form-group mx-3">
                        <label for="qtVagas">Quatidade de vagas de garagem</label>
                        <input type="number" name="qtVagas" class="form-control" id="qtVagas" placeholder="Qtd de vagas de garagem">
                    </div> -->
                </div><br>
                <div class="row">
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="individualCheck">
                    <label name="individualCheck" class="form-check-label"><h5>Individual?<h5></label>
                  </div><br>
                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="condominioCheck">
                    <label name="condominioCheck" class="form-check-label"><h5>Condomínio?<h5></label>
                  </div><br>

                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="mobiliado">
                    <label name="mobiliado" class="form-check-label"><h5>Mobiliado?</h5></label>
                  </div><br>

                  <!--<div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="pet">
                    <label name="pet" class="form-check-label"><h5>Aceita Pet?</h5></label>
                  </div>--><br>
                </div>
              </div>
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Filtrar</h5></button>
          </form>
        </div>                
      </div>
    </div>

    <button class="btn btn-ajust btn-clientes btn-primary my-2" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
      Filtros Clientes
    </button>
    <div class="collapse" id="collapseExample2">
      <div class="card card-body position">
        <div class="pesquisa">
          <form action="{{route('cliente-busca')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group col-lg-2">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(dd)x xxxx-xxxx" >
                </div> 
            </div>
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Filtrar</h5></button>
          </form>
        </div>                
      </div>
    </div>

    <!-- Card do imóvel -->

    @if (isset($imoveis))
      <div class="row">
        @foreach ($imoveis as $imovel)
        <a href="{{route('imovel',['id'=>$imovel->id])}}">
          <div class="col-md-3">
            <div class="card card-widget">
              <div class="card-header imoveisCard">
                <div class="user-block">
                  <span class="description">id: {{$imovel->id}}</span>
                  <span class="description">{{$imovel->endereco}}, {{$imovel->numero}}
                    @if ($imovel->complemento != '')
                      {{$imovel->complemento}}
                    @endif
                    <br>{{$imovel->bairro}} | {{$imovel->municipio}}
                  </span>
                  <span class="description">cadastrado {{$imovel->created_at}} </span>
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
                <a href="{{route('imovel',['id'=>$imovel->id])}}">
                  <div class="card-comment d-flex">
                    <i class="fas fa-ruler-combined pt-2"></i>
        
                    <span class="username px-3">
                      {{$imovel->metragemTotal}} m²
                    </span>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-toilet"></i>
                    <div class="px-3">
                      @if ($imovel->banheiro != null)
                        {{$imovel->banheiro}} Banheiro(s)

                        @else
                        Nenhum banheiro
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-bed"></i>
                    <div class="px-3">
                      @if ($imovel->quarto)
                        {{$imovel->quarto}} Quarto(s)
                      @else
                          Nenhum Quarto
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-car"></i>
                    <div class="px-3">
                      @if ($imovel->garagem)
                        {{$imovel->garagem}} Vagas de Garagem
                      @else
                          Sem Garagem
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i><b>R$</b></i>
                    <div class="px-3">
                        {{$imovel->valor}} (Aluguel)
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <div class="px-3 btn valorTotal">
                      <b>
                      <?php
                        if ($imovel->IPTU != null){
                          if($imovel->valorCondominio != null) {
                            echo  'Total: R$'.($imovel->IPTU + $imovel->valor + $imovel->valorCondominio);
                          }else{
                            echo  'Total: R$'.($imovel->IPTU + $imovel->valor);
                          }
                        }else{
                          if($imovel->valorCondominio != null) {
                            echo  'Total: R$'.'<i><b>R$</b></i>'.($imovel->valor + $imovel->valorCondominio);
                          }else {
                            echo  'Total: R$'.($imovel->valor);
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

    @if (isset($imoveisV))
      <div class="row">
        @foreach ($imoveisV as $imovel)
        <a href="{{route('imovel',['id'=>$imovel->id])}}">
          <div class="col-md-3">
            <div class="card card-widget">
              <div class="card-header imoveisCard">
                <div class="user-block">
                  <span class="description">id: {{$imovel->id}}</span>
                  <span class="description">{{$imovel->endereco}}, {{$imovel->numero}}
                    @if ($imovel->complemento != '')
                      {{$imovel->complemento}}
                    @endif
                    <br>{{$imovel->bairro}} | {{$imovel->municipio}}
                  </span>
                  <span class="description">cadastrado {{$imovel->created_at}} </span>
                </div>
              </div>
              <div class="card-body">
                <div id="controleSlide" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset('assets/images/sala3.jpg')}}" alt="comodos">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('assets/images/quarto.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('assets/images/banheiro.jpg')}}" alt="Third slide">
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
                <a href="{{route('imovel',['id'=>$imovel->id])}}">
                  <div class="card-comment d-flex">
                    <i class="fas fa-ruler-combined pt-2"></i>
        
                    <span class="username px-3">
                      {{$imovel->metragemTotal}} m²
                    </span>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-toilet"></i>
                    <div class="px-3">
                      @if ($imovel->banheiro != null)
                        {{$imovel->banheiro}} Banheiro(s)
                        @else
                        Nenhum banheiro
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-bed"></i>
                    <div class="px-3">
                      @if ($imovel->quarto)
                        {{$imovel->quarto}} Quarto(s)
                      @else
                          Nenhum Quarto
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i class="fas fa-car"></i>
                    <div class="px-3">
                      @if ($imovel->garagem)
                        {{$imovel->garagem}} Vagas de Garagem
                      @else
                          Sem Garagem
                      @endif
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <i><b>R$</b></i>
                    <div class="px-3">
                        {{$imovel->valor}} (Valor Estimado)
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <div class="px-3 btn valorTotal">
                      <b>
                      <?php
                        if ($imovel->IPTU != null){
                          if($imovel->valorCondominio != null) {
                            echo  'Total: R$'.($imovel->IPTU + $imovel->valor + $imovel->valorCondominio);
                          }else{
                            echo  'Total: R$'.($imovel->IPTU + $imovel->valor);
                          }
                        }else{
                          if($imovel->valorCondominio != null) {
                            echo  'Total: R$'.'<i><b>R$</b></i>'.($imovel->valor + $imovel->valorCondominio);
                          }else {
                            echo  'Total: R$'.($imovel->valor);
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

    @if (isset($cliente))
      <div class="row">
        @foreach ($cliente as $item)
          <div class="row my-3">
            <div class="col clienteCard">
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">{{$item->nome}}</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  {{$item->telefone}}
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </section>
@endsection