@extends('layouts.master')
@section('transaction.edit')
<h1 class="text-center p-3">Editar Venda: <strong>{{$data -> nome}}</strong></h1>
  @include('transaction.form.edit')
@endsection