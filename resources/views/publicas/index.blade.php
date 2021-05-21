@extends('layouts.nav_aluno')

@section('styles')
  <link href="{{asset('css/aluno/index-aluno.css')}}" rel="stylesheet">
@endsection

@section('content')
  <div class="container">
    <div class="card mt-2 shadow-sm">
      <img src="{{asset('img/aluno/2.png')}}">
      <div class="card-body">                 
        <p> Consulta de permanências de materias do Núcleo Comum. (Ex: Matematica)</p>
        <a href="{{route('materiaIndex')}}" class="btn btn-sm btn-outline-success btn-block"> Ir agora </a>
      </div>
    </div>

    <div class="card mt-2 shadow-sm">
      <img src="{{asset('img/aluno/1.png')}}">
      <div class="card-body">
        <p> Consulta de permanências por curso especifico. (Ex: Informatica)</p>
        <a href="{{route('areaIndex')}}"class="btn btn-sm btn-outline-success btn-block"> Ir agora </a>
      </div>
    </div>
  
    <div class="card mt-2 shadow-sm">
      <img src="{{asset('img/aluno/3.png')}}">
      <div class="card-body">
        <p> Consulta pelo nome do seu professor. (Ex: Professora Lia Nara Balta Quinta) </p>
        <a href="{{route('professorIndex')}}" class="btn btn-sm btn-outline-success btn-block"> Ir agora </a>
      </div>
    </div>
  </div>
@endsection