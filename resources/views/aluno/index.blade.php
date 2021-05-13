@extends('layout.index_nav')

@section('styles')
  <link href="{{asset('css/aluno/index-aluno.css')}}" rel="stylesheet">
@endsection

@section('conteudo')
  <div class="container">
    <div class="card mt-4 shadow-sm">
      <img src="{{asset('img/aluno/2.png')}}">
      <div class="card-body">                 
        <p> Ao ir para Núcleo Comum funciona para que você realize a busca dos professores das materias do núcleo comum do campus. (Ex: Professores de Matematica)</p>
        <a href="{{route('materiaIndex')}}" class="btn btn-sm btn-outline-success btn-block"> Ir agora </a>
      </div>
    </div>

    <div class="card mt-4 shadow-sm">
      <img src="{{asset('img/aluno/1.png')}}">
      <div class="card-body">
        <p> A busca por Materias Tecnicas funciona para que você realize a busca dos professores das materias especificas do seu curso. (Ex: Professores de Informatica)</p>
        <a href="{{route('areaIndex')}}"class="btn btn-sm btn-outline-success btn-block"> Ir agora </a>
      </div>
    </div>
  
  
    <div class="card mt-4 shadow-sm">
      <img src="{{asset('img/aluno/3.png')}}">
      <div class="card-body">
        <p> A busca por nome funciona para que você realize a busca pelo nome do seu professor. (Ex: Professora Lia Nara Balta Quinta) </p>
        <a href="{{route('professorIndex')}}" class="btn btn-sm btn-outline-success btn-block"> Ir agora </a>
      </div>
    </div>
  </div>
@endsection