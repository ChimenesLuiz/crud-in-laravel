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
        <input type="email" class="form-control phone" value="{{$data->phone}}" name="phone" placeholder="(99) 99999-9999">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Telefone 2</label>
        <input type="email" class="form-control phone" value="{{$data->phone2}}" name="phone2" placeholder="(99) 99999-9999">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">CPF</label>
        <input type="text" class="form-control cpf" value="{{$data->cpf}}" name="cpf" placeholder="000.000.000-00">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Data de Nascimento</label>
        <input class="form-control date" name="nascimento" placeholder="DD-MM-YYYY" value="{{$data->nascimento}}">
      </div>

      <div class="col-12">
        <label for="username" class="form-label">Sexo</label>
        <select class="form-select" name="sexo">
          <option value="feminino" {{($data -> sexo == 'feminino') ? 'selected' : ''}}>Feminino</option>
          <option value="masculino" {{($data -> sexo == 'masculino') ? 'selected' : ''}}>Masculino</option>
          <option value="apache" {{($data -> sexo == 'apache') ? 'selected' : ''}}>Optimus Prime</option>
        </select>
      </div>

      
      <div class="col-12">
        <label for="address" class="form-label">CEP</label>
        <input type="text" class="form-control cep" id="cep" name="cep" onblur="pesquisacep();" placeholder="00000-000" value="{{$data->cep}}">
        <div id="msgerror" style="position: absolute"></div>
      </div>


      <div class="col-12">
        <label for="address" class="form-label">Endereco</label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="{{$data->endereco}}">
      </div>

      <div class="col-6">
        <label for="address" class="form-label">Estado</label>

        <select class="form-select" id="estado" name="estado">
          <option value="AC" {{($data -> estado == 'AC') ? 'selected' : ''}}>Acre</option>
          <option value="AL" {{($data -> estado == 'AL') ? 'selected' : ''}}>Alagoas</option>
          <option value="AP" {{($data -> estado == 'AP') ? 'selected' : ''}}>Amapá</option>
          <option value="AM" {{($data -> estado == 'AM') ? 'selected' : ''}}>Amazonas</option>
          <option value="BA" {{($data -> estado == 'BA') ? 'selected' : ''}}>Bahia</option>
          <option value="CE" {{($data -> estado == 'CE') ? 'selected' : ''}}>Ceará</option>
          <option value="DF" {{($data -> estado == 'DF') ? 'selected' : ''}}>Distrito Federal</option>
          <option value="ES" {{($data -> estado == 'ES') ? 'selected' : ''}}>Espírito Santo</option>
          <option value="GO" {{($data -> estado == 'GO') ? 'selected' : ''}}>Goiás</option>
          <option value="MA" {{($data -> estado == 'MA') ? 'selected' : ''}}>Maranhão</option>
          <option value="MT" {{($data -> estado == 'MT') ? 'selected' : ''}}>Mato Grosso</option>
          <option value="MS" {{($data -> estado == 'MS') ? 'selected' : ''}}>Mato Grosso do Sul</option>
          <option value="MG" {{($data -> estado == 'MG') ? 'selected' : ''}}>Minas Gerais</option>
          <option value="PA" {{($data -> estado == 'PA') ? 'selected' : ''}}>Pará</option>
          <option value="PB" {{($data -> estado == 'PB') ? 'selected' : ''}}>Paraíba</option>
          <option value="PR" {{($data -> estado == 'PR') ? 'selected' : ''}}>Paraná</option>
          <option value="PE" {{($data -> estado == 'PE') ? 'selected' : ''}}>Pernambuco</option>
          <option value="PI" {{($data -> estado == 'PI') ? 'selected' : ''}}>Piauí</option>
          <option value="RJ" {{($data -> estado == 'RJ') ? 'selected' : ''}}>Rio de Janeiro</option>
          <option value="RN" {{($data -> estado == 'RN') ? 'selected' : ''}}>Rio Grande do Norte</option>
          <option value="RS" {{($data -> estado == 'RS') ? 'selected' : ''}}>Rio Grande do Sul</option>
          <option value="RO" {{($data -> estado == 'RO') ? 'selected' : ''}}>Rondônia</option>
          <option value="RR" {{($data -> estado == 'RR') ? 'selected' : ''}}>Roraima</option>
          <option value="SC" {{($data -> estado == 'SC') ? 'selected' : ''}}>Santa Catarina</option>
          <option value="SP" {{($data -> estado == 'SP') ? 'selected' : ''}}>São Paulo</option>
          <option value="SE" {{($data -> estado == 'SE') ? 'selected' : ''}}>Sergipe</option>
          <option value="TO" {{($data -> estado == 'TO') ? 'selected' : ''}}>Tocantins</option>
          <option value="EX" {{($data -> estado == 'EX') ? 'selected' : ''}}>Estrangeiro</option>
        </select>
      </div>

      <div class="col-6">
        <label for="address" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" value="{{$data -> cidade}}" >
      </div>
      
    </div>
    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('client.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Editar">
    </div>
    </form>
    <script src="{{asset('js/pesquisacep.js')}}"></script>