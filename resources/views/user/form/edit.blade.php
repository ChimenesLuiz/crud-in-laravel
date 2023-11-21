
<form action="{{route('user.update', ['id' => $user_data -> id])}}" method="POST" novalidate>
    @method('PUT')
    @csrf
    @include('user.form.validation')
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="{{$user_data -> name}}" name="name">

      </div>

      <div class="col-sm-6">
        <label for="lastName" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="{{$user_data -> last_name}}" name="last_name">
      </div>

      <div class="col-12">
        <label for="username" class="form-label">Perfil</label>
        <select class="form-select" name="id_profile">
          @foreach ($profile_data as $row)
          @if ($row -> id == $user_data -> id_profile)
          <option value="{{$row -> id}}" selected>{{$row -> name}}</option>  
          @endif
          <option value="{{$row -> id}}">{{$row -> name}}</option>  
          @endforeach
        </select>
      </div>
      
      
      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="{{$user_data -> email}}" class="form-control" id="email" name="email">
      </div>
    
    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('user.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
  </form>