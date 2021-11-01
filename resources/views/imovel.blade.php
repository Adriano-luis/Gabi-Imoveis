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
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset("assets/images/locacao/$dados->img1")}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('assets/images/banheiro.jpg')}}" alt="Second slide">
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
                    <div>
                        <p class="font-weight-bold descricao-imovel">Imóvel para "Locação/Venda"</p>
                        <p class="text-muted">Av. Sete de Setembro, 3302</p>
                        <p class="text-muted">Data que foi postado</p>
                    </div>
                    <div class="row">
                        <div class="px-3 align-icons">
                            <i class="fas fa-ruler-combined fa-2x"></i>
                            <p>67m²</p>
                        </div>
                        <div class="px-3 align-icons">
                            <i class="fas fa-bed fa-2x"></i>
                            <p>2 quarto</p>
                        </div>
                        <div class="px-3 align-icons">
                            <i class="fas fa-shower fa-2x"></i>
                            <p>1 banheiro</p>
                        </div>
                        <div class="px-3 align-icons">
                            <i class="fas fa-car fa-2x"></i>
                            <p>1 vaga</p>
                        </div>
                        <div class="px-3 align-icons">
                            <i class="fas fa-paw fa-2x"></i>
                            <p>Sim</p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="font-weight-bold px-3">Descrição do proprietário</p>
                    </div>
                    <div class="row align-row">
                        <div class="align-description">
                            <i class="fas fa-list fa-2x"></i>
                            <div>
                                <p class="px-2">Armarios planejados na cozinha , recem reformado , proximo ao shopping frei caneca , Avenida Paulista, Hospital Sirio Libanês .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 hide">

                    <div class="card sticky-top card-rounded" style="width: 18rem;">
                        <div class="card-header">
                        <h5 class="card-title">Nome da rua</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Aluguel: R$</li>
                            <li class="list-group-item">Condomínio: R$</li>
                            <li class="list-group-item">Total: R$</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection