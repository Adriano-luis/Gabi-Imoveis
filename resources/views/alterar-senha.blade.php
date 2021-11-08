@extends('adminlte::page')
@section('content')
<section class="alterar-senha">
    <table  class="table table-striped"  style="text-align:center;">
        <thead>
            <tr>
                <th>Email</th>
                <th>Senha</th>
                <th>Opções</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($lista as $item)
            <tr>
                <td>{{$item->nome}}</td>
                <td>{{$item->email}}</td>
                <td>
                    @component('_components.modal-cliente',['dado'=>$item])
                        
                    @endcomponent
                </td>

            </tr>
                
            @endforeach
            
        </tbody>
    </table>
</section>
@endsection