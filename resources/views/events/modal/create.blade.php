<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Pedido:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Nome do cliente:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do cliente" required>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="date">Data do pedido:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="title">Valor:</label>
                    <input type="number" class="form-control" id="value" name="value" placeholder="valor" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="title">Status:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0">Aberto</option>
                            <option value="1">Fechado</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Observações do pedido:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Observações do pedido">Sem observações.</textarea>
            </div>
            <div class="form-group">
                <label for="title">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="(00) 0 0000-0000" required>
            </div>
            <div class="form-group">
                <label id="location" for="title">Endereço:</label>
                <div class="form-row">
                    <div class="col-md-8 mb-2">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="street" name="street" placeholder="Rua" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="numero">Número:</label>
                        <input type="text" class="form-control" id="number" name="number" placeholder="Número" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="district" name="district" placeholder="Bairro" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Cadastrar">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
