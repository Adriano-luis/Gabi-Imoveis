@extends('adminlte::page')
@section('content')
    <section class="gerenciador">
        <form action="{{route('gerenciador')}}" method="POST">
            @csrf
            <div class="form-group col-lg-2">
                <label for="nomeContribuinte">Nome do contribuinte</label>
                <input required type="text" name="nomeContribuinte" class="form-control" id="nomeContribuinte" placeholder="Nome">
            </div>
            <div class="form-group col-lg-2">
                <label for="cargo">Email</label>
                <input required type="email"  class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-lg-2">
                <label for="senha">Senha</label>
                <input required type="password"  class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>
            <div class="form-group col-lg-2">
                <label for="checkSenha">Confirmar senha</label>
                <input required type="password"  class="form-control" id="checkSenha" name="checkSenha" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary imovel-btn-print">Salvar</button>
        </form>
    </section>
@endsection