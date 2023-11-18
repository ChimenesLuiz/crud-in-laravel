@extends('layouts.master')
@section('supplier.edit')
<h1 class="text-center p-3">Editar Fornecedor: <strong>{{$supplier -> name}}</strong></h1>
  @include('supplier.form.edit')
@endsection