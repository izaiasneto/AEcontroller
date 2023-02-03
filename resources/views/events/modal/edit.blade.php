<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModalLabel1">Editando </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ url('update-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="product_id1" name="product_id1"/>
            <div class="form-group">
                <label for="title">Nome do cliente:</label>
                <input type="text" class="form-control" id="name1" name="name1"  required>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="date">Data do pedido:</label>
                    <input type="date" class="form-control" id="date1" name="date1"  required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="title">Valor:</label>
                    <input type="number" class="form-control" id="value1" name="value1" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="title">Status:</label>
                        <select name="status1" id="status1" class="form-control">
                            <option value="0">Aberto</option>
                            <option value="1">Fechado</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Observações do pedido:</label>
                <textarea class="form-control" id="description1" name="description1" placeholder="Observações do pedido" required></textarea>
            </div>
            <div class="form-group">
                <label for="title">Telefone:</label>
                <input type="text" class="form-control" id="phone1" name="phone1" placeholder="(00) 0 0000-0000"  required>
            </div>
            <div class="form-group">
                <label id="location" for="title">Endereço:</label>
                <div class="form-row">
                    <div class="col-md-8 mb-2">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="street1" name="street1" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="numero">Número:</label>
                        <input type="text" class="form-control" id="number1" name="number1" placeholder="Número" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="city1" name="city1" placeholder="Cidade"  required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="district1" name="district1" placeholder="Bairro"  required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Atualizar">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
