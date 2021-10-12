@extends('adminlte::page')
@section('content')
<section class="locacao-cadastro">
    <div class="formulario">
        <form action="{{route('loc-novo-cliente')}}" method="POST">
            @csrf
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
            <input type="submit" value="Salvar">
        </form>
    </div>
</section>

@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/template.scss')}}"/>
@endsection
@section('js')
    
@endsection