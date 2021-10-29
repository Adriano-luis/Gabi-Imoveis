@extends('adminlte::page')
@section('content')
    <section class="lista-clientes">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>V.Min</th>
                    <th>V.Max</th>
                    <th>Tipo</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>m²</th>
                    <th>Qt.Como.</th>
                    <th>Qt.Quar.</th>
                    <th>Indivi.</th>
                    <th>Condo.</th>
                    <th>Mobi.</th>
                    <th>Disp.</th>
                    <th>Opç.</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->telefone}}</td>
                        <td>{{$cliente->valorMin}}</td>
                        <td>{{$cliente->valorMax}}</td>
                        <td>{{$cliente->tipo}}</td>
                        <td>{{$cliente->endereco}}</td>
                        <td>{{$cliente->bairro}}</td>
                        <td>{{$cliente->metragemTotal}}</td>
                        <td>{{$cliente->qtComodos}}</td>
                        <td>{{$cliente->quarto}}</td>
                        <td>{{$cliente->individual}}</td>
                        <td>{{$cliente->condominio}}</td>
                        <td>{{$cliente->mobilhado}}</td>
                        <td>{{$cliente->disponivel}}</td>
                        <td><a href="">Editar</a>-<a href="">Buscar</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection