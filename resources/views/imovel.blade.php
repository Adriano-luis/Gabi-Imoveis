@extends('adminlte::page')
@section('content')
    <section class="imovel">
        <div class="">
            <div class="row pt-3">
                <div class="col-lg-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                @if ($dadosImovel->img1 != null || $dadosImovel->img1 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img1")}}" alt="Primeira imagem">
                                @else
                                    Sem imagem! 
                                @endif
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img2 != null || $dadosImovel->img2 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img2")}}" alt="Segunda imagem">
                                @else
                                    Sem imagem! 
                                @endif                               
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img3 != null || $dadosImovel->img3 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img3")}}" alt="Terceira imagem">
                                @else
                                    Sem imagem! 
                                @endif     
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img4 != null || $dadosImovel->img4 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img4")}}" alt="Quarta imagem">
                                @else
                                    Sem imagem! 
                                @endif     
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img5 != null || $dadosImovel->img5 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img5")}}" alt="Quinta imagem">
                                @else
                                    Sem imagem! 
                                @endif                              
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img6 != null || $dadosImovel->img6 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img6")}}" alt="Sexta imagem">
                                @else
                                    Sem imagem! 
                                @endif                              
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img7 != null || $dadosImovel->img7 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img7")}}" alt="Sétima imagem">
                                @else
                                    Sem imagem!
                                @endif                                
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img8 != null || $dadosImovel->img8 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img8")}}" alt="Oitava imagem">
                                @else
                                    Sem imagem!
                                @endif
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img9 != null || $dadosImovel->img9 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img9")}}" alt="Nona imagem">
                                @else
                                    Sem imagem!
                                @endif
                            </div>
                            <div class="carousel-item">
                                @if ($dadosImovel->img10 != null || $dadosImovel->img10 != '')
                                    <img class="d-block w-100" src="{{asset("assets/images/locacao/$dadosImovel->img10")}}" alt="Décima imagem">
                                @else
                                    Sem imagem!
                                @endif
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div><br>
                    @if (isset($dadosImovel->idLocador))
                        <div>
                            <p class="font-weight-bold descricao-imovel">Imóvel para Locação</p>
                            <p class="text-muted">
                                {{$dadosImovel->endereco}}, {{$dadosImovel->numero}}
                                | {{$dadosImovel->bairro}} - {{$dadosImovel->municipio}} 
                            </p>
                            <p class="text-muted">{{$dadosImovel->created_at}}</p>
                        </div>
                        <div class="row">
                            <div class="px-3 align-icons">
                                <i class="fas fa-ruler-combined fa-2x"></i>
                                <p>{{$dadosImovel->metragemTotal}}m²</p>
                            </div>
                            <div class="px-3 align-icons">
                                <i class="fas fa-bed fa-2x"></i>
                                <p>{{$dadosImovel->quarto}} quarto(s)</p>
                            </div>
                            <div class="px-3 align-icons">
                                <i class="fas fa-shower fa-2x"></i>
                                <p>{{$dadosImovel->banheiro}} banheiro(s)</p>
                            </div>
                            <div class="px-3 align-icons">
                                <i class="fas fa-car fa-2x"></i>
                                <p>{{$dadosImovel->garagem}} vaga(s)</p>
                            </div>
                            <div class="px-3 align-icons">
                                <i class="fas fa-paw fa-2x"></i>
                                <p>{{$dadosImovel->pet}}</p>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <hr class="solid"><br>
                        <div class="row align-row">
                            <i class="fas fa-list fa-2x"></i>
                            <div class="align-description">
                                <div>
                                    <p class="font-weight-bold mx-2 imovel-description">Descrição do proprietário</p>
                                    <p class="px-2">{{$dadosImovel->sobreImovel}}</p>
                                </div>
                            </div>
                        </div>
                        @if ($dadosImovel->mobilhado == 'Sim')
                            <hr class="solid"><br>
                            <div class="row align-row">
                                <i class="fas fa-list fa-2x"></i>
                                <div class="align-description">
                                    <div>
                                        <p class="font-weight-bold mx-2 imovel-description">Mobilha</p>
                                        <p class="px-2">{{$dadosImovel->sobreMobilha}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($dadosImovel->condominio == 'Sim')
                            <hr class="solid"><br>
                            <div class="row align-row">
                                <i class="fas fa-list fa-2x"></i>
                                <div class="align-description">
                                    <div>
                                        <p class="font-weight-bold mx-2 imovel-description">Condomínio</p>
                                        <p class="px-2">{{$dadosImovel->sobreMobilha}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <hr class="solid"><br>
                        <div class="row align-row">
                            <i class="fas fa-list fa-2x"></i>
                            <div class="align-description">
                                <div>
                                    <p class="font-weight-bold mx-2 imovel-description">Observações</p>
                                    <p class="px-2">{{$dadosImovel->observacoes}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row float-right">
                            <button type="submit" class="btn btn-primary imovel-btn-print ">Imprimir</button>
                            <button type="submit" class="btn btn-primary imovel-btn-print px-2">Editar</button>
                            <button type="submit" class="btn btn-primary imovel-btn-print">Proprietário</button>
                        </div>
                    </div>

                    {{-- card sticky --}}

                    <div class="col-4 hide">

                        <div class="card sticky-top card-rounded" style="width: 18rem;">
                            <div class="card-header">
                            <h5 class="card-title">id:{{$dadosImovel->id}} </h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Aluguel: R${{$dadosImovel->valor}}</li>
                                @if ($dadosImovel->condominio == 'Sim')
                                    <li class="list-group-item">Condomínio: R${{$dadosImovel->valorCondominio}}</li> 
                                @endif
                                <li class="list-group-item">Total: R$</li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    
                    @if (isset($dadosImovel->idVendedor))
                            <div>
                                <p class="font-weight-bold descricao-imovel">Imóvel para Venda</p>
                                <p class="text-muted">
                                    {{$dadosImovel->endereco}}, {{$dadosImovel->numero}}, @if ($dadosImovel->complemeto != null)
                                        {{$dadosImovel->complemeto}}
                                    @endif
                                    | {{$dadosImovel->bairro}} - {{$dadosImovel->municipio}} 
                                </p>
                                <p class="text-muted">{{$dadosImovel->created_at}}</p>
                            </div>
                            <div class="row">
                                <div class="px-3 align-icons">
                                    <i class="fas fa-ruler-combined fa-2x"></i>
                                    <p>{{$dadosImovel->metragemTotal}}m²</p>
                                </div>
                                <div class="px-3 align-icons">
                                    <i class="fas fa-bed fa-2x"></i>
                                    <p>{{$dadosImovel->quarto}} quarto(s)</p>
                                </div>
                                <div class="px-3 align-icons">
                                    <i class="fas fa-shower fa-2x"></i>
                                    <p>{{$dadosImovel->banheiro}} banheiro(s)</p>
                                </div>
                                <div class="px-3 align-icons">
                                    <i class="fas fa-car fa-2x"></i>
                                    <p>{{$dadosImovel->garagem}} vaga(s)</p>
                                </div>
                                <div class="px-3 align-icons">
                                    <i class="fas fa-paw fa-2x"></i>
                                    <p>{{$dadosImovel->pet}}</p>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                            <hr class="solid"><br>
                            <div class="row align-row">
                                <i class="fas fa-list fa-2x"></i>
                                <div class="align-description">
                                    <div>
                                        <p class="font-weight-bold mx-2 imovel-description">Descrição do proprietário</p>
                                        <p class="px-2">{{$dadosImovel->sobreImovel}}</p>
                                    </div>
                                </div>
                            </div>
                            @if ($dadosImovel->mobilhado == 'Sim')
                                <hr class="solid"><br>
                                <div class="row align-row">
                                    <i class="fas fa-list fa-2x"></i>
                                    <div class="align-description">
                                        <div>
                                            <p class="font-weight-bold mx-2 imovel-description">Mobilha</p>
                                            <p class="px-2">{{$dadosImovel->sobreMobilha}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($dadosImovel->condominio == 'Sim')
                                <hr class="solid"><br>
                                <div class="row align-row">
                                    <i class="fas fa-list fa-2x"></i>
                                    <div class="align-description">
                                        <div>
                                            <p class="font-weight-bold mx-2 imovel-description">Condomínio</p>
                                            <p class="px-2">{{$dadosImovel->sobreMobilha}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <hr class="solid"><br>
                            <div class="row align-row">
                                <i class="fas fa-list fa-2x"></i>
                                <div class="align-description">
                                    <div>
                                        <p class="font-weight-bold mx-2 imovel-description">Observações</p>
                                        <p class="px-2">{{$dadosImovel->observacoes}}</p>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary imovel-btn-print">Imprimir</button>
                        </div>

                        {{-- card sticky --}}

                        <div class="col-4 hide">

                            <div class="card sticky-top card-rounded" style="width: 18rem;">
                                <div class="card-header">
                                <h5 class="card-title">id:{{$dadosImovel->id}} </h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Aluguel: R${{$dadosImovel->valor}}</li>
                                    @if ($dadosImovel->condominio == 'Sim')
                                        <li class="list-group-item">Condomínio: R${{$dadosImovel->valorCondominio}}</li> 
                                    @endif
                                    <li class="list-group-item">Total: R$</li>
                                </ul>
                            </div>
                        </div>
                    @endif
            </div>
        </div>
    </section>
@endsection