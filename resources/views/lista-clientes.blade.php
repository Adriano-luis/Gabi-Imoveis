@extends('adminlte::page')
@section('content')
    <section class="lista-clientes">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->telefone}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection