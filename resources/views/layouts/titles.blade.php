@if (request() -> routeIs('user.index'))
    <title>Usuarios</title>
@elseif (request() -> routeIs('user.create'))
    <title>Cadastro de Usuario</title>
@elseif (request() -> routeIs('user.edit'))
    <title>Edicao de Usuario</title>
@endif
