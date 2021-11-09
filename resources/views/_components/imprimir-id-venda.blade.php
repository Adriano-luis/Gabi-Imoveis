@extends('adminlte::page')
@section('content')
    <section class="imprimir-id">
        <form action="{{route('imprimir-id-venda')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group col-lg-4">
                    <label for="id">ID do Imóvel</label>
                    <input type="text" name="id" class="form-control" id="idVenda" placeholder="Número do ID" >
                </div> 
            </div>
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Imprimir</h5></button>
          </form>
    </section>
@endsection