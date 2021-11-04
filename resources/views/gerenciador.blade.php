@extends('adminlte::page')
@section('content')
    <section class="gerenciador">
        <form action="{{route('gerenciador')}}">
            <div class="form-group col-lg-2">
                <label for="nomeContribuinte">Nome do contribuinte</label>
                <input type="text" name="nomeContribuinte" class="form-control" id="nomeContribuinte" placeholder="Nome">
            </div>
            <div class="form-group col-lg-2">
                <label for="cargo">Cargo</label>
                <input type="text"  class="form-control" name="cargo" placeholder="Cargo">
            </div>
            <div class="form-group col-lg-2">
                <label for="senha"> Senha</label>
                <input type="text"  class="form-control" name="senha" placeholder="Senha">
            </div>
        </form>
    </section>
@endsection