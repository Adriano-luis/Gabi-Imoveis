@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    <div class="formulario">
        <form action="{{route('loc-novo-imovel')}}" method="POST">
            @csrf
            <div class="card">
                <!-- card-header -->
                <div class="card-header ui-sortable-handle" >
                  <h3 class="card-title">
                    Imóvel
                  </h3>
                </div>
                <!-- card-body -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <label for="">Valor</label><br>
                    <input type="text" name="" id=""><br><br>

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
                </div>
            </div>
            <div class="card">
                <!-- card-header -->
                <div class="card-header ui-sortable-handle" >
                  <h3 class="card-title">
                    Locator
                  </h3>
                  <div class="card-tools">
                  </div>
                </div>
                <!-- card-body -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <label for="">Nome</label><br>
                    <input type="text" name="" id=""><br><br>

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

                    <label for="">Estado civil</label><br>
                    <select name="" id="">
                        <option value=""></option>
                    </select><br><br>

                    <label for="">Profissão</label><br>
                    <input type="text" name="" id=""><br><br>

                    <label for="">CPF</label><br>
                    <input type="text" name="" id=""><br><br>

                    <label for="">RG</label><br>
                    <input type="text" name="" id=""><br><br>

                    <label for="">Telefone</label><br>
                    <input type="text" name="" id=""><br><br>

                    <label for="">Banco</label><br>
                    <select name="" id="">
                        <option value=""></option>
                    </select><br><br>

                    <label for="">Agência</label>
                    <input type="text" name="" id="">

                    <label for="">Tipo de Conta</label>
                    <select name="" id="">
                        <option value=""></option>
                    </select><br><br>

                    <label for="">Conta</label>
                    <input type="text" name="" id="">    

                    <label for="">Pix</label>
                    <input type="text" name="" id="">  
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header ui-sortable-handle" >
                  <h3 class="card-title">
                    Informações Adicionais
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <label for="">Descrição sobre o Imóvel</label><br>
                    <input type="text" name="" id=""><br><br>

                    <label for="">Descrição sobre a Mobilha</label><br>
                    <textarea name="" id="" cols="30" rows="10"></textarea><br><br>

                    <label for="">Descrição sobre o Condomínio</label><br>
                    <textarea name="" id="" cols="30" rows="10"></textarea><br><br>

                    <label for="">Observações</label><br>
                    <textarea name="" id="" cols="30" rows="10"></textarea><br><br>

                    <label for="">Imagem 1</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 2</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 3</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 4</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 5</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 6</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 7</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 8</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 9</label><br>
                    <input type="file" name="" id=""><br><br>

                    <label for="">Imagem 10</label><br>
                    <input type="file" name="" id=""><br><br>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <input type="submit" value="Salvar">
            <button>
                Imprimir
            </button>
        </form>
    </div>
</section>

@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/template.scss')}}"/>
@endsection
@section('js')
    
@endsection