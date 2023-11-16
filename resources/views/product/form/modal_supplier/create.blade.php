
<div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Fornecedor</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="supplierForm" action="{{route('product.storeModal')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="" class="col-form-label">CPNJ:</label>
            <input type="text" class="form-control" id="cnpj" name="cpnj">
          </div>
          <div class="d-flex mt-3 justify-content-between">
            <a class="w-25 btn btn-danger text-decoration-none text-white" data-bs-dismiss="modal">Cancelar</a>
            <button type="submit" class="w-25 btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
