<form action="{{route('client.update', ['id' => $data -> id])}}" method="POST" novalidate>
    @method('PUT')
    @csrf
    @include('user.form.validation')
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="firstName" name="name" placeholder="" value="{{$data->name}}" name="name">

      </div>

      <div class="col-sm-6">
        <label for="lastName" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="{{$data->last_name}}" name="last_name">
      </div>

      <div class="col-12">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" value="{{$data->email}}" id="email" name="email">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Telefone 1</label>
        <input type="email" class="form-control phone" id="email" value="{{$data->phone}}" name="phone">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Telefone 2</label>
        <input type="email" class="form-control phone" id="email" value="{{$data->phone2}}" name="phone2">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">CPF</label>
        <input type="text" class="form-control cpf" id="cpf" value="{{$data->cpf}}" name="cpf">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Data de Nascimento</label>
        <input class="form-control" name="nascimento" id="date" placeholder="DD-MM-YYYY" value="{{$data->nascimento}}">
      </div>

      <div class="col-12">
        <label for="username" class="form-label">Sexo</label>
        <select class="form-select" name="sexo">
          <option value="feminino" {{($data -> sexo == 'feminino') ? 'selected' : ''}}>Feminino</option>
          <option value="feminino" {{($data -> sexo == 'masculino') ? 'selected' : ''}}>Masculino</option>
          <option value="feminino" {{($data -> sexo == 'apache') ? 'selected' : ''}}>Optimus Prime</option>
        </select>
      </div>

      
      <div class="col-12">
        <label for="address" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" onblur="pesquisacep();" placeholder="00000-000">
      </div>


      <div class="col-12">
        <label for="address" class="form-label">Endereco</label>
        <input type="text" class="form-control" id="endereco" name="endereco" >
      </div>

      <div class="col-6">
        <label for="address" class="form-label">Estado</label>

        <select class="form-select" id="estado" name="estado" >
          <option value="AC" selected></option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
          <option value="EX">Estrangeiro</option>
        </select>
      </div>

      <div class="col-6">
        <label for="address" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" >
      </div>
      
    </div>
    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('client.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
    </form>
    <script src="{{asset('js/pesquisacep.js')}}"></script>