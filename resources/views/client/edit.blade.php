@extends('layouts.master')
@section('client.edit')
<h1 class="text-center p-3">Editar Cliente: <strong>{{$data -> name}}</strong></h1>
  @include('client.form.edit')
@endsection