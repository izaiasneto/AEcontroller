<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModalLabel1">Editando </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form >
            <div class="form-group">
                <label for="title">Nome do cliente:</label>
                <input type="text" class="form-control" id="nameshow" name="nameshow"  disabled="disabled">
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="date">Data do pedido:</label>
                    <input type="date" class="form-control" id="dateshow" name="dateshow"  disabled="disabled">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="title">Valor:</label>
                    <input type="number" class="form-control" id="valueshow" name="valueshow" disabled="disabled">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="title">Status:</label>
                        <select name="status1" id="statusshow" class="form-control" disabled="disabled">
                            <option value="0">Aberto</option>
                            <option value="1">Fechado</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Observações do pedido:</label>
                <textarea class="form-control" id="descriptionshow" name="descriptionshow" disabled="disabled"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Telefone:</label>
                <input type="text" class="form-control" id="phoneshow" name="phoneshow" disabled="disabled">
            </div>
            <div class="form-group">
                <label id="location" for="title">Endereço:</label>
                <div class="form-row">
                    <div class="col-md-8 mb-2">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="streetshow" name="street1" disabled="disabled">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="numero">Número:</label>
                        <input type="text" class="form-control" id="numbershow" name="numbershow"  disabled="disabled">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cityshow" name="cityshow"  disabled="disabled">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="districtshow" name="districtshow" disabled="disabled">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

