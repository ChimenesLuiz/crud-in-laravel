@extends('layouts.master')
@section('product.edit')
<h1 class="text-center p-3">Editar Produto: <strong>{{$product -> name}}</strong></h1>
  @include('product.form.edit')
@endsection