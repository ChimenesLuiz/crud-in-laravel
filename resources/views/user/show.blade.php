
<button class="btn btn-dark mb-3">
    <i class="bi bi-plus-circle"></i>
    <a class="text-decoration-none text-white" href="{{route('user.create')}}">CRIAR USUARIO</a>
</button>
<table class="table table-hover text-left">
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Perfil</th>
        <th scope="col">Email</th>
        <th scope="col">Acoes</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $row)
        <tr>
            <td>{{$row -> user_name}}</td>
            <td>{{($row -> profile_name ?? 'Sem perfil')}}</td>
            <td>{{$row -> user_email}}</td>
            <td>
                <a href="{{route('user.edit', ['id' => $row -> user_id])}}" class="link-dark mx-1">
                    <i class="bi bi-pencil-square" style="font-size: 20px;"></i>
                </a>
                    <a href="{{route('user.destroy', ['id' => $row -> user_id])}}" class="link-dark mx-1">
                        <i class="bi bi-trash" style="font-size: 20px; color:red;"></i>
                    </a>

            </td> 
        </tr>
    @endforeach
    </tbody>
</table>
