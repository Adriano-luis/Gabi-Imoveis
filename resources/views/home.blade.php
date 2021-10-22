@extends('adminlte::page')
@section('content')
    
  <section class="home">
    <button class="btn btn-ajust btn-primary my-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Filtros Imóveis
    </button>
    <div class="collapse" id="collapseExample">
      <div class="card card-body position">
        <div class="pesquisa">
          <form action="{{route('home')}}" method="POST">
            @csrf
            <div class="card-body">
                @if (isset($existeImovel))
                    <div>{{$existeImovel}}</div>
                @endif
                <div class="form-group col-lg-1">
                    <label for="idImovel">Id Imóvel</label>
                    <input type="text" name="id" class="form-control" id="idImovel" placeholder="ID imóvel">
                </div>
                <div class="row">
                  <div class="form-group mx-3">
                      <label for="rgi">RGI</label>
                      <input type="text" name="rgi" class="form-control" id="rgi" placeholder="RGI">
                  </div>
                  <div class="form-group mx-3">
                      <label for="valor">Valor</label>
                      <input type="text" name="valor" class="form-control" id="Valor" placeholder="Valor">
                  </div>
                </div>
                <div class="row">
                    <div class="form-group mx-3">
                        <label for="rua">Rua</label>
                        <input type="text" name="rua" class="form-control" id="rua" placeholder="Rua">
                    </div>
                    <div class="form-group mx-3">
                        <label for="numero">Número</label>
                        <input type="text" name="numero" class="form-control" id="numero" placeholder="Número">
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
                    <div class="form-group mx-3">
                        <label for="qtBanheiros">Quatidade de banheiro</label>
                        <input type="number" name="qtBanheiros" class="form-control" id="qtBanheiros" placeholder="Quatidade de banheiro">
                    </div>
                    <div class="form-group mx-3">
                        <label for="qtVagas">Quatidade de vagas de garagem</label>
                        <input type="number" name="qtVagas" class="form-control" id="qtVagas" placeholder="Qtd de vagas de garagem">
                    </div>
                </div><br>
                <div class="row">
                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="condominioCheck">
                    <label name="condominioCheck" class="form-check-label"><h5>Condomínio?<h5></label>
                  </div><br>

                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="mobiliado">
                    <label name="mobiliado" class="form-check-label"><h5>Mobiliado?</h5></label>
                  </div><br>

                  <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" name="pet">
                    <label name="pet" class="form-check-label"><h5>Aceita Pet?</h5></label>
                  </div><br>
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

    <!-- final dos filtros -->

    <!-- inicio dos cards -->

    <div class="row my-3">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Primary</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                content
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Success</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Warning</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        ou
        <br>

        <div class="col-md-6">
            <!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <span class="username"><a href="#">Nome do dono</a></span>
                  <span class="description">Av. Sete de Setembro 3302 </span>
                  <span class="description">Apelido do imóvel </span>
                  <span class="description">Imóvel cadastrado dia 22/10/2021 - 10:56 </span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{URL::asset('../../assets/images/sala3.jpg')}}" alt="comodos">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{URL::asset('../../assets/images/quarto.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{URL::asset('../../assets/images/banheiro.jpg')}}" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <div class="card-comment d-flex">
                  <!-- User image -->
                  <i class="fas fa-ruler-combined pt-2"></i>

                  <span class="username px-3">
                      Quantidade de Comodos
                  </span>
                    <!-- /.username -->
                </div><br>
                <!-- /.card-comment -->
                <div class="d-flex">
                  <!-- User image -->
                  <i class="fas fa-toilet"></i>
                  <div class="px-3">
                    Quantidade de banheiros
                  </div>
                </div><br>
                <div class="d-flex">
                  <!-- User image -->
                  <i class="fas fa-bed"></i>
                  <div class="px-3">
                    Quantidade de Quartos
                  </div>
                </div><br>
                <div class="d-flex">
                  <!-- User image -->
                  <i class="fas fa-car"></i>
                  <div class="px-3">
                    Quantidade de Garagem
                  </div>
                </div>
                <!-- /.card-comment -->
              </div>
            </div>
            <!-- /.card -->
    </div>

    @if (isset($cliente))
        {{$cliente->nome}}
    @endif
  </section>
@endsection