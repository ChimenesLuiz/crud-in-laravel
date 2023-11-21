<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('supplier.storeModal')}}" method="POST">
          @csrf
          <input hidden type="text" name="email" value="dsa">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome</label>
            <input type="input" class="form-control" name="name" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">CNPJ</label>
            <input type="input" class="form-control" name="cnpj" id="recipient-name">
          </div>
          <div class="d-flex justify-content-between modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>