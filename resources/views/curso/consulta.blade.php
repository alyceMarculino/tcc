@extends('layout.index_nav')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/curso/consulta.css')}}">
@endsection

@section('conteudo') 
  <div class="listaDeProfessores">
    <h2> Lista de Professores do {{$area->nome}} </h2>
    @foreach ($area->professores as $professor)
      <div class="professor">
        <p> {{$professor->nome_usual }} - {{$professor->id}} </p>
        <a href="{{route('pegarPermanencia', [$professor->id])}}"  type="button" class="btn btn-outline-dark">Ver Horario</a>
      </div>  
    @endforeach
  </div> 
@endsection