@extends('adminlte::page')
@section('content')
    <section class="imprimir-telefone">
        <form action="{{route('')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group col-lg-4">
                    <label for="telefone">Telefone do Proprietário</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="coloque o DDD com o zero(011,041,013)" >
                </div> 
            </div>
            <button class="btn btn-size float-right btn-primary" type="submit"><h5>Imprimir</h5></button>
          </form>
    </section>
@endsection