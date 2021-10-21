@extends('adminlte::page')
@section('content')
    <section class="home">
      <div class="pesquisa">
        <form action="{{route('home')}}" method="POST">
            @csrf
            <label for="bairro">Id Imóvel</label>
            <input type="text" name="id" class="form-control" id="" placeholder="">

            <label for="bairro">RGI</label>
            <input type="text" name="rgi" class="form-control" id="" placeholder="">

            <label for="bairro">Valor</label>
            <input type="text" name="valor" class="form-control" id="" placeholder="">

            <label for="bairro">Endereço</label>
            <input type="text" name="rua" class="form-control" id="" placeholder="">

            <label for="bairro">Número</label>
            <input type="text" name="numero" class="form-control" id="" placeholder="">

            <label for="bairro">Metragem</label>
            <input type="text" name="metragemTot" class="form-control" id="" placeholder="">

            <label for="bairro">Qt. Cômodos</label>
            <input type="text" name="qtCom" class="form-control" id="" placeholder="">

            <label for="bairro">Qt. Quartos</label>
            <input type="text" name="qtQuartos" class="form-control" id="" placeholder="">

            <label for="bairro">Qt. Banheiros</label>
            <input type="text" name="qtBanheiros" class="form-control" id="" placeholder="">

            <label for="bairro">Qt. Vagas de garagem</label>
            <input type="text" name="qtVagas" class="form-control" id="" placeholder="">

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="condominioCheck">
              <label name="condominioCheck" class="form-check-label">Condomínio?</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="mobiliado">
              <label name="mobiliado" class="form-check-label">Mobiliado?</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="pet">
              <label name="pet" class="form-check-label">Aceita Pet?</label>
            </div>

            <input type="submit" value="Filtrar">
        </form>
    </div>
      <div class="col-md-3">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Imóvel 1</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                      <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  The body of the card
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
      </div>
    </section>
@endsection
@section('css')
    
@endsection
@section('js')
    
@endsection