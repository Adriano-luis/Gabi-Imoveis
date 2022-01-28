@extends('adminlte::page')
@section('content')
    
  <section class="home">
    <button class="btn btn-ajust btn-primary my-2 col" type="button" data-toggle="collapse" data-target="#collapseLoc" aria-expanded="false" aria-controls="collapseExample">
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
                <div class="card border-primary p-3">
                  <div class="row">
                    <div class="form-group col-lg-5">
                      <label> Nome do Cliente</label>
                      <input type="text"  class="form-control" name="NomeCliente" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-lg-6">
                      <label> Telefone do cliente</label>
                      <input type="text"  class="form-control col-3" name="TelefoneCliente" placeholder="(dd)x xxxx-xxxx">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-check mx-3">
                        <input required class="form-check-input" type="checkbox" name="resiCheck">
                        <label name="resiCheck" class="form-check-label text-danger"><h5>Residencial<h5></label>
                      </div><br>
                      <div class="form-check mx-3">
                        <input required class="form-check-input" type="checkbox" name="naoResiCheck">
                        <label  name="naoResiCheck" class="form-check-label text-danger"><h5>Não residencial<h5></label>
                      </div><br>
                    </div>
                  </div>
                <div class="row px-2">
                  <div class="form-group col-lg-1">
                    <input type="hidden" name="locacao" value="Sim">
                    <label for="idImovel">Id Imóvel</label>
                    <input type="text" name="id" class="form-control" id="idImovel" placeholder="ID imóvel">
                  </div>
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
                      <input type="text" name="metragemTot" class="form-control" id="metragemTot" placeholder="m²">
                  </div>
                </div>
                <div class="row">
                    <div class="form-group mx-3">
                        <label for="qtCom">Quatidade de comodos</label>
                        <input type="number" name="qtCom" class="form-control" id="qtCom" placeholder="Quatidade de comodos">
                    </div>
                    <!-- <div class="form-group mx-3">
                        <label for="qtBanheiros">Quatidade de banheiro</label>
                        <input type="number" name="qtBanheiros" class="form-control" id="qtBanheiros" placeholder="Quatidade de banheiro">
                    </div> -->
                    <div class="form-group mx-3">
                        <label for="qtVagas">Quatidade de vagas de garagem</label>
                        <input type="number" name="qtVagas" class="form-control" id="qtVagas" placeholder="Qtd de vagas de garagem">
                    </div> 
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
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Buscar</h5></button>
          </form>
        </div>                
      </div>
    </div>

    <button class="btn btn-ajust btn-primary my-2 col" type="button" data-toggle="collapse" data-target="#collapseVenda" aria-expanded="false" aria-controls="collapseExample">
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
                <div class="card border-primary p-3">
                  <div class="row">
                    <div class="form-group col-lg-5">
                      <label> Nome do Cliente</label>
                      <input type="text"  class="form-control" name="NomeCliente" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-lg-6">
                      <label> Telefone do cliente</label>
                      <input type="text"  class="form-control col-3" name="TelefoneCliente" placeholder="(dd)x xxxx-xxxx">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-check mx-3">
                      <input class="form-check-input" type="checkbox" name="apCheck">
                      <label name="apCheck" class="form-check-label text-danger"><h5>Apartamento<h5></label>
                    </div><br>
                    <div class="form-check mx-3">
                      <input class="form-check-input" type="checkbox" name="casaCheck">
                      <label name="casaCheck" class="form-check-label text-danger"><h5>Casa<h5></label>
                    </div><br>
                    <div class="form-check mx-3">
                      <input class="form-check-input" type="checkbox" name="chacaCheck">
                      <label name="chacaCheck" class="form-check-label text-danger"><h5>Chácaras<h5></label>
                    </div><br>
                    <div class="form-check mx-3">
                      <input class="form-check-input" type="checkbox" name="terreCheck">
                      <label name="terreCheck" class="form-check-label text-danger"><h5>Terreno<h5></label>
                    </div><br>
                </div>
                </div>
                <div class="row p-2">
                  <div class="form-group col-lg-1">
                    <label for="idImovel">Id Imóvel</label>
                    <input type="text" name="id" class="form-control" id="idImovel" placeholder="ID imóvel">
                  </div>
                  <div class="row">
                    <div class="form-group mx-3">
                        <label for="municipio">Metragem</label>
                        <input type="text" name="metragemTot" class="form-control" id="municipio" placeholder="Metragem">
                    </div>
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
                      <input type="text" name="metragemTot" class="form-control" id="metragemTot" placeholder="m²">
                  </div>
                </div> -->
                <div class="row">
                    <div class="form-group mx-3">
                        <label for="qtCom">Quatidade de comodos</label>
                        <input type="number" name="qtCom" class="form-control" id="qtCom" placeholder="Quatidade de comodos">
                    </div>
                    <!-- <div class="form-group mx-3">
                        <label for="qtBanheiros">Quatidade de banheiro</label>
                        <input type="number" name="qtBanheiros" class="form-control" id="qtBanheiros" placeholder="Quatidade de banheiro">
                    </div> -->
                    <div class="form-group mx-3">
                        <label for="qtVagas">Quatidade de vagas de garagem</label>
                        <input type="number" name="qtVagas" class="form-control" id="qtVagas" placeholder="Qtd de vagas de garagem">
                    </div>
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
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Buscar</h5></button>
          </form>
        </div>                
      </div>
    </div>

    <button class="btn btn-ajust btn-clientes btn-primary my-2 col" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
      Proprietários
    </button>
    <div class="collapse" id="collapseExample2">
      <div class="card card-body position">
        <div class="pesquisa">
          <form action="{{route('loc-editar-cliente')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group col-lg-4">
                    <label for="nome">Locação:</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" >
                </div> 
            </div>
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Buscar</h5></button>
          </form>
          <form action="{{route('ven-editar-cliente')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group col-lg-4">
                    <label for="nome">Venda:</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" >
                </div> 
            </div>
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Buscar</h5></button>
          </form>
        </div>                
      </div>
    </div>

    <!-- Card do imóvel -->

    @if (isset($imoveis))
    <div style=" padding-right:10px; text-align: end">
     Total: <?php echo count($imoveis); ?>
    </div><br>
      <div class="row">
        @foreach ($imoveis as $imovel)
          @if (isset($ray) && isset($ray) && $ray == 'sim')
            <a href="{{route('imovel',['locId'=>$imovel['id']])}}">
          @else
            <a href="{{route('imovel',['locId'=>$imovel->id])}}"> 
          @endif
          <div class="col-md-3">
            <div class="card card-widget <?php if(isset($ray) && isset($ray) && $ray == 'sim'){if($imovel['disponivel'] != 'Sim'){echo 'home-card-alugado';}}else{if($imovel->disponivel != 'Sim'){echo 'home-card-alugado';}}?>">
              <div class="card-header imoveisCard">
                <div class="user-block">
                  <span class="description">id: {{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}</span>
                  <span class="description">{{isset($ray) && $ray == 'sim' ? $imovel['endereco']:$imovel->endereco}}, {{isset($ray) && $ray == 'sim' ? $imovel['numero']:$imovel->numero}}
                    @if ((isset($imovel->complemento) && $imovel->complemento != '') || (isset($imovel['complemento']) && $imovel['complemento'] != ''))
                      {{ isset($ray) && $ray == 'sim' ? $imovel['complemento']:$imovel->complemento}}
                    @endif
                    <br>{{ isset($ray) && $ray == 'sim' ? $imovel['bairro']:$imovel->bairro}} | {{isset($ray) && $ray == 'sim' ? $imovel['municipio']:$imovel->municipio}}
                  </span>
                  <span class="description">cadastrado {{isset($ray) && $ray == 'sim' ? $imovel['criado']:$imovel->criado}} </span>
                </div>
              </div>
      
              <div class="card-body">
                <div id="controleSlide-{{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner ajust-carrousel">
                    <div class="carousel-item active">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img1']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img1'])}}" alt="Primeira imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img1")}}" alt="Primeira imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img2']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img2'])}}" alt="Segunda imagem">
                        @endif 
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img2")}}" alt="Segunda imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img3']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img3'])}}" alt="Terceira imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img3")}}" alt="Terceira imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img4']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img4'])}}" alt="Quarta imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img4")}}" alt="Quarta imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img5']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img5'])}}" alt="Quinta imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img5")}}" alt="Quinta imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img6']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img6'])}}" alt="Sexta imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img6")}}" alt="Sexta imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img7']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img7'])}}" alt="Sétima imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img7")}}" alt="Sétima imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img8']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img8'])}}" alt="Oitava imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img8")}}" alt="Oitava imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img9']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img9'])}}" alt="Nona imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img9")}}" alt="Nona imagem">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        @if (isset($imovel['img10']))
                          <img src="{{asset('assets/images/locacao/'.$imovel['img10'])}}" alt="Décima imagem">
                        @endif
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img10")}}" alt="Décima imagem">
                      @endif
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#controleSlide-{{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#controleSlide-{{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
              </div>
              <div class="card-footer card-comments">
                @if ( isset($ray) && $ray == 'sim')
                  <a href="{{route('imovel',['locId'=>$imovel['id']])}}">

                @else
                  <a href="{{route('imovel',['locId'=>$imovel->id])}}"> 
                @endif
                  <div class="card-comment d-flex">
                    <i class="fas fa-ruler-combined pt-2"></i>
        
                    <span class="username px-3">
                      <?php
                        if(isset($ray) && $ray == 'sim'){
                          if (!array_key_exists("metragemTotal", $imovel)) {
                            echo 'Sem metragem';
                          }else{
                            echo $imovel['metragemTotal'].'m²';
                          }

                        }else{
                          echo $imovel->metragemTotal.'m²';
                        }
                      ?>
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
                        if ((isset($imovel->IPTU) && $imovel->IPTU != null) || (isset($ray) && $ray == 'sim' && isset($imovel['IPTU']) && $imovel['IPTU'] != null)){
                          if((isset($imovel->valorCondominio) && $imovel->valorCondominio != null) || (isset($ray) && $ray == 'sim' && isset($imovel['valorCondominio']) && $imovel['valorCondominio'] != null)) {
                            echo  'Total: R$'.((isset($ray) && $ray == 'sim' ? $imovel['IPTU']:$imovel->IPTU)
                            + (isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor)
                            + (isset($ray) && $ray == 'sim' ? $imovel['valorCondominio']:$imovel->valorCondominio));
                          }else{
                            echo  'Total: R$'.((isset($ray) && $ray == 'sim' ? $imovel['IPTU']:$imovel->IPTU) 
                            + (isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor));
                          }
                        }else{
                          if((isset($imovel->valorCondominio) && $imovel->valorCondominio != null) || (isset($ray) && $ray == 'sim' && isset($imovel['valorCondominio']) && $imovel['valorCondominio'] != null)) {
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

    @if (isset($imoveisV))
    <div style=" padding-right:10px; text-align: end">
      Total: <?php echo count($imoveisV); ?>
     </div><br>
      <div class="row">
        @foreach ($imoveisV as $imovel)
          @if (isset($ray) && isset($ray) && $ray == 'sim')
            <a href="{{route('imovel',['venId'=>$imovel['id']])}}">
          @else
            <a href="{{route('imovel',['venId'=>$imovel->id])}}"> 
          @endif
          <div class="col-md-3">
            <div class="card card-widget <?php if(isset($ray) && isset($ray) && $ray == 'sim'){if($imovel['disponivel'] != 'Sim'){echo 'home-card-alugado';}}else{if($imovel->disponivel != 'Sim'){echo 'home-card-alugado';}}?>">
              <div class="card-header imoveisCard">
                <div class="user-block">
                  <span class="description">id: {{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}</span>
                  <span class="description">{{isset($ray) && $ray == 'sim' ? $imovel['endereco']:$imovel->endereco}}, {{isset($ray) && $ray == 'sim' ? $imovel['numero']:$imovel->numero}}
                    @if ((isset($imovel->complemento) && $imovel->complemento != '') || (isset($imovel['complemento']) && $imovel['complemento'] != ''))
                      {{ isset($ray) && $ray == 'sim' ? $imovel['complemento']:$imovel->complemento}}
                    @endif
                    <br>{{ isset($ray) && $ray == 'sim' ? $imovel['bairro']:$imovel->bairro}} | {{isset($ray) && $ray == 'sim' ? $imovel['municipio']:$imovel->municipio}}
                  </span>
                  <span class="description">cadastrado {{isset($ray) && $ray == 'sim' ? $imovel['criado']:$imovel->criado}} </span>
                </div>
              </div>
              <div class="card-body">
                <div id="controleSlide-{{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img1'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img1")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img2'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img2")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img3'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img3")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img4'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img4")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img5'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img5")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img6'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img6")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img7'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img7")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img8'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img8")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img9'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img9")}}" alt="comodos">
                      @endif
                    </div>
                    <div class="carousel-item">
                      @if (isset($ray) && $ray == 'sim')
                        <img src="{{asset('assets/images/locacao/'.$imovel['img10'])}}" alt="comodos">
                      @else
                        <img src="{{asset("assets/images/locacao/$imovel->img10")}}" alt="comodos">
                      @endif
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#controleSlide-{{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#controleSlide-{{isset($ray) && $ray == 'sim' ? $imovel['id']:$imovel->id}}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
              </div>
              <div class="card-footer card-comments">
                @if (isset($ray) && isset($ray) && $ray == 'sim')
                  <a href="{{route('imovel',['venId'=>$imovel['id']])}}">
                @else
                  <a href="{{route('imovel',['venId'=>$imovel->id])}}"> 
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
                        {{ isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor}}
                    </div>
                  </div><br>
                  <div class="d-flex">
                    <div class="px-3 btn valorTotal">
                      <b>
                      <?php
                        if((isset($imovel->valorCondominio) && $imovel->valorCondominio != null) || (isset($ray) && $ray == 'sim' && $imovel['valorCondominio'] != null)) {
                          echo  'Total: R$'.((isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor)
                          + (isset($ray) && $ray == 'sim' ? $imovel['valorCondominio']:$imovel->valorCondominio));
                        }else{
                          echo  'Total: R$'.(isset($ray) && $ray == 'sim' ? $imovel['valor']:$imovel->valor);
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