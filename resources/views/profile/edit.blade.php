@extends('layouts.master')
@section('profile.edit')
<h1 class="text-center p-3">Editar Perfil: <strong>{{$data -> nome}}</strong></h1>
  @include('profile.form.edit')
@endsection