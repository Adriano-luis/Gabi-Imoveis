@extends('adminlte::page')
@section('content')
        <section class='loc-cadastro'>
        {{-- <div class='forms'>
            <form action="/action_page.php">
                <label for="fname">Aluguel</label>
                <input type="text" id="fname" name="fname">
                <label for="lname">Condominio</label>
                <input type="text" id="lname" name="lname"><br><br>
                <h3>Endereço do Imóvel</h3>
                <label for="lname">Rua</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="lname">Número</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="lname">Complemento</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="lname">Município</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="lname">Bairro</label>
                <input type="text" id="lname" name="lname"><br><br>
                <h3>Descrição do imóvel</h3>
                <h2>Quartos</h2>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <a class="dropdown-item" href="#">3</a>
                    </div>
                </div>

                <input type="submit" value="Imprimir">
                <input type="submit" value="Salvar">
            </form>
        </div> --}}
        <div class="dropdown-menu">
            <form class="px-4 py-3">
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                        Remember me
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="#">Forgot password?</a>
        </div>

    </section>
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/template.scss')}}"/>
@endsection

@section('js')
    
@endsection