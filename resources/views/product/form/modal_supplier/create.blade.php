<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('supplier.storeModal')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome</label>
            <input type="input" class="form-control" name="name" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">CNPJ</label>
            <input type="input" class="form-control" name="cnpj" id="recipient-name">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Send message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>