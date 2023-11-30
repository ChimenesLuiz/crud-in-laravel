@extends('layouts.master')
@section('client.index')
    @include('client.show')
    <script src="{{asset('js/maskingOnClient.js')}}"></script>
@endsection