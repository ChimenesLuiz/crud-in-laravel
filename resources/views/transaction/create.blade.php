@extends('layouts.master')
@section('transaction.create')
  <h1 class="text-center p-3">Cadastro de Venda</h1>
  @include('transaction.form.create')
  <script src="{{asset('js/calc_total_transaction.js')}}"></script>
  {{-- <script src="{{asset('js/maskingOnTransaction.js')}}"></script> --}}
@endsection