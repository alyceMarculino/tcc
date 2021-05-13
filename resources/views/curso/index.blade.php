@extends('layout.index_nav')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/curso/index-curso.css')}}">
@endsection

@section('conteudo')
<div class="container-fluid">   
  <a href="{{route('cursoConsulta', [1])}}" class="card mb-3 btn-outline-success">
    <img src="{{asset('img/aluno/logoComputador.png')}}">
    <p> Professores de Matérias de Informática </p>
  </a>

  <a href="{{route('cursoConsulta', [2])}}" class="card mb-3 btn-outline-success">
    <img src="{{asset('img/aluno/eletroLogo.png')}}">
    <p> Professores de Matérias de Eletrotécnica </p>
  </a>

  <a href="{{route('cursoConsulta', [3])}}" class="card mb-3 btn-outline-success">
    <img src="{{asset('img/aluno/logoMecanica.png')}}">
    <p> Professores de Matérias de Mecânicas </p>
  </a>
</div>
@endsection