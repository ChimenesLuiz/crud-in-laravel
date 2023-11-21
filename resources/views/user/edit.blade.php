@extends('layouts.master')
@section('user.edit')
<h1 class="text-center p-3">Editar Usuario: <strong>{{$user_data -> nome}}</strong></h1>
  @include('user.form.edit')
@endsection