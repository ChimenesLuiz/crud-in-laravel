@extends('layouts.master')
@section('client.create')
  <h1 class="text-center p-3">Cadastro de Cliente</h1>
  @include('client.form.create')
  <script src="{{asset('js/maskingOnClient.js')}}"></script>
  <script src="{{asset('js/pesquisacep.js')}}"></script>
@endsection