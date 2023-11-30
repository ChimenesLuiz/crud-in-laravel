@extends('layouts.master')
@section('client.edit')
<h1 class="text-center p-3">Editar Cliente: <strong>{{$data -> name}}</strong></h1>
  @include('client.form.edit')
  <script src="{{asset('js/maskingOnClient.js')}}"></script>
  <script src="{{asset('js/pesquisacep.js')}}"></script>
@endsection