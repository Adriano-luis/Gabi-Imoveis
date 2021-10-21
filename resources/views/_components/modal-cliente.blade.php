<!-- Button trigger modal -->
<button type="button" class="btn corTexto" data-toggle="modal" data-target="#clienteModal">
    modal-cliente
  </button>
  
  <!-- Modal -->
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
          <input type="text"  class="form-control" id="NomeClienteModal" placeholder="Nome Completo"><br>
          <input type="text"  class="form-control col-3" id="TelefoneClienteModal" placeholder="Telefone">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="SalvarCadastroRapido">Salvar</button>
        </div>
      </div>
    </div>
  </div>