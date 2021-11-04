@extends('adminlte::page')
@section('content')
    <section class="gerenciador">
        <form action="{{route('mudar-senha')}}">
            <div class="form-group col-lg-2">
                <label for="novaSenha">Nova senha</label>
                <input type="password" name="novaSenha" class="form-control" id="novaSenha" placeholder="Nova senha">
            </div>
            <div class="form-group col-lg-2">
                <label for="check">Repita a senha</label>
                <input type="password"  class="form-control" id="check" name="check" placeholder="Nova senha">
            </div>
        </form>
    </section>
@endsection