@extends('layout.index_nav')
@section('styles')
  <!-- <link rel="stylesheet" href="{{asset('css/curso/"nome".css')}}"> -->
@endsection

@section('conteudo')  
  <h2> Lista de Professores{{$area->nome}} </h2>
  @foreach ($area->professores as $professor)
    <p> {{$professor->nome }}</p>
  @endforeach
@endsection