@extends('layouts.master')
@section('user.edit')
<h1 class="text-center p-5">Editar Usuario: <strong>{{$data -> nome}}</strong></h1>
  @include('user.form.edit')
@endsection