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

<<<<<<< HEAD
                <input type="submit" value="Imprimir">
                <input type="submit" value="Salvar">
            </form>
        </div> --}}
        <div class="dropdown-menu">
            <form class="px-4 py-3">
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
=======
                    <label for="">Endereço</label><br>
                    <input type="text" name="" id="">

                    <label for="">Nº</label>
                    <input type="text" name="" id="">

                    <label for="">Bairro</label>
                    <input type="text" name="" id="">

                    <label for="">Municipio</label>
                    <input type="text" name="" id="">

                    <label for="">Complemento</label>
                    <input type="text" name="" id=""><br><br>

                    <label for="">Metragem Total</label><br>
                    <input type="text" name="" id="">

                    <label for="">Metragem útil</label>
                    <input type="text" name="" id=""><br><br>

                    <label for="">Qt. Cômodos</label><br>
                    <input type="number" name="" id=""><br><br>

                    <label for="">Quarto</label><br>
                    <input type="number" name="" id="">

                    <label for="">Suite</label>
                    <input type="number" name="" id="">

                    <label for="">Cozinha</label>
                    <input type="number" name="" id="">

                    <label for="">Lavanderia</label>
                    <input type="number" name="" id="">

                    <label for="">Sala de Estar</label>
                    <input type="number" name="" id="">

                    <label for="">Sala de Jantar</label>
                    <input type="number" name="" id="">

                    <label for="">Banheiro</label>
                    <input type="number" name="" id="">

                    <label for="">Garagem</label>
                    <input type="number" name="" id="">

                    <label for="">Escritório</label>
                    <input type="number" name="" id="">

                    <label for="">Jardim</label>
                    <input type="number" name="" id="">

                    <label for="">Varanda</label>
                    <input type="number" name="" id=""><br><br>

                    <label for="">Água e Luz separadas</label><br>
                    <input type="radio" name="" id="">Sim
                    <input type="radio" name="" id="">Não<br><br>

                    <label for="">RGI</label><br>
                    <input type="text" name="" id=""><br><br>

                    <label for="">Instalação</label><br>
                    <input type="text" name="" id=""><br><br>

                    <label for="">IPTU</label><br>
                    <input type="text" name="" id=""><br><br>

                    <label for="">Condomínio</label><br>
                    <input type="radio" name="" id="">Sim
                    <input type="radio" name="" id="">Não<br><br>

                    <label for="">Valor do Condomínio</label>
                    <input type="text" name="" id="">

                    <label for="">Andar</label>
                    <input type="number" name="" id=""><br><br>

                    <label for="">Mobilhado</label><br>
                    <input type="radio" name="" id="">Sim
                    <input type="radio" name="" id="">Não<br><br>

                    <label for="">Aceita Pet</label><br>
                    <input type="radio" name="" id="">Sim
                    <input type="radio" name="" id="">Não<br><br>

                    <label for="">Opção de Venda</label><br>
                    <input type="radio" name="" id="">Sim
                    <input type="radio" name="" id="">Não<br><br>
                  </div>
>>>>>>> ff7ee8f3b8cbd95f9c2565d1ffab534570c2d6f8
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