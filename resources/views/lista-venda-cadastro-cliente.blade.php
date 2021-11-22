@extends('adminlte::page')
@section('content')
    <section class="lista-propri-loc">
        <table border="1" class="table table-striped"  style="text-align:center; font-size:12px">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr style="font-size:16px; line-height:36px;">
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->telefone}}</td>
                        <td><a class="btn btn-success" href="{{route('ven-lista-editar-cliente',['id'=>$cliente->id])}}">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection