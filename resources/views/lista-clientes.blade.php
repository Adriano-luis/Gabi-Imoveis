@extends('adminlte::page')
@section('content')
    <section class="lista-clientes">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <form action="{{route('cliente-busca-pagina')}}" method="POST">
                    @csrf
                    <div class="row" style="margin-top: 0.5rem">
                        <div class="form-group col-8">
                            <input type="text" class="form-control" name="telefonePesquisa" placeholder="(dd)x xxxx-xxxx">
                        </div>
                        
                        <div class="col-4">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>
        <table border="1" class="table table-striped"  style="text-align:center; font-size:12px">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <!-- <th>V.Min</th> -->
                    <th>V.Max</th>
                    <th>Tipo</th>
                    <!-- <th>Endereço</th> -->
                    <th>Bairro</th>
                    <!-- <th>m²</th> -->
                    <!-- <th>Comod.</th> -->
                    <th>Quartos</th>
                    <th>Indivi.</th>
                    <!--<th>Condo.</th> -->
                    <th>Mobi.</th>
                    <th>Meses</th>
                    <th>Observações</th>
                    <th>Disp.</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->telefone}}</td>
                        <!-- <td>$cliente->valorMin</td> -->
                        <td>{{$cliente->valorMax}}</td>
                        <td>{{$cliente->tipo}}</td>
                        <!-- <td>$cliente->endereco</td> -->
                        <td>{{$cliente->bairro}}</td>
                        <!-- <td>$cliente->metragemTotal</td> -->
                        <!-- <td>$cliente->qtComodos</td> -->
                        <td>{{$cliente->quarto}}</td>
                        <td>{{$cliente->individual}}</td>
                        <!-- <td>$cliente->condominio</td> -->
                        <td>{{$cliente->mobilhado}}</td>
                        <?php $dias = $cliente->created_at->diff(date('Y/m/d H:i')); ?>
                        <td>{{$dias->m}}</td>
                        <td>Observações gerais</td>
                        <td>{{$cliente->disponivel}}</td>
                        
                        <td><a href="{{route('cliente-editar', ['id'=>$cliente->id])}}">Editar</a> - <a href="{{route('cliente-busca',['id'=>$cliente->id])}}">Buscar</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection