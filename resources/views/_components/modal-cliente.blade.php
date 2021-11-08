<!-- Button trigger modal -->
<button type="button" class="btn btn-primary corTexto" data-toggle="modal" data-target="#clienteModal">
    Alterar senha
  </button>
  
  <!-- Modal -->
  <form action="{{route('alterar-senha')}}" method="POST">
    @csrf
    <div class="modal" id="clienteModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Cadastro Rápido</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="text"  class="form-control" name="NomeModal" value="{{$dado->nome}}" placeholder="Nome"><br>
            <input type="text"  class="form-control" name="EmailModal" value="{{$dado->email}}" placeholder="Email"><br>
            <input type="password"  class="form-control " name="senhaModal" placeholder="Nova Senha">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="SalvarCadastroRapido">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </form>