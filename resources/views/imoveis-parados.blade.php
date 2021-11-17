@extends('adminlte::page')
@section('content')
    <section class="parados">
        <h1>Esses Imóveis estão parados:</h1>
        <a class="btn btn-primary col" data-toggle="collapse" href="#collapseVen" role="button" aria-expanded="false" aria-controls="collapse">
            Vendas
        </a><br/><br/>
        <div class="collapse" id="collapseVen">
        <div class="card card-body">
            <table border="1" class="table table-striped"  style="text-align:center; font-size:12px">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Valor</th>
                        <th>Bairro</th>
                        <th>Município</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paradosVend as $parado)
                        <tr>
                            <td>{{$parado->id}}</td>
                            <td>{{$parado->valor}}</td>
                            <td>{{$parado->bairro}}</td>
                            <td>{{$parado->municipio}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>

        <a class="btn btn-primary col" data-toggle="collapse" href="#tabelaLoc" role="button" aria-expanded="false" aria-controls="collapse">
            Locação
        </a>
        <div class="collapse" id="tabelaLoc">
            <div class="card card-body">
                <table border="1" class="table table-striped"  style="text-align:center; font-size:12px">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Valor</th>
                            <th>Bairro</th>
                            <th>Município</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paradosLoc as $parado)
                            <tr>
                                <td>{{$parado->id}}</td>
                                <td>{{$parado->valor}}</td>
                                <td>{{$parado->bairro}}</td>
                                <td>{{$parado->municipio}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection