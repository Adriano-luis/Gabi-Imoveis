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
  </section>
  <section class="home">
  <button class="btn btn-ajust btn-clientes btn-primary my-2" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
      Filtros Clientes
    </button>
    <div class="collapse" id="collapseExample2">
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
                        <input type="text" name="idImovel" class="form-control" id="idImovel" placeholder="ID imóvel"  value="{{isset($id) && $id !='' ? $id : '' }}" >
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
                            <input type="text" name="municipio" class="form-control" id="municipio" placeholder="Município">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mx-3">
                            <label for="qtCom">Quatidade de comodos</label>
                            <input type="number" name="qtCom" class="form-control" id="qtCom" placeholder="Quatidade de comodos">
                        </div>
                        <div class="form-group mx-3">
                            <label for="qtQuarto">Quatidade de quarto</label>
                            <input type="number" name="qtQuarto" class="form-control" id="qtQuarto" placeholder="Quatidade de quartos">
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
                </form>
                <button class="btn btn-size float-right btn-primary" type="submit"><h5>Filtrar</h5></button>
        </div>                
      </div>
  </section>
@endsection