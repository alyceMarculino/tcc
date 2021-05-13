@extends('layout.index_nav')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/curso/index-curso.css')}}">
@endsection

@section('conteudo')
<div class="container-fluid">   
  <a href="{{route('cursoConsulta', [1])}}" class="card mb-3 btn-outline-success" >
    <div class="grid grid-template-columns">
      <img src="{{asset('img/aluno/logoComputador.png')}}" class="ml-2 mt-3 imgbtn">
      Professores de Matérias de Informática
    </div>
  </a>

  <a href="{{route('cursoConsulta', [2])}}" class="card mb-3 btn-outline-success" >
    <div class="grid grid-template-columns">
      <img src="{{asset('img/aluno/eletroLogo.png')}}" class="ml-2 mt-3 imgbtn">
      Professores de Matérias de Eletrotécnica
    </div>
  </a>

  <a href="{{route('cursoConsulta', [3])}}" class="card mb-3 btn-outline-success" >
    <div class="grid grid-template-columns">
      <img src="{{asset('img/aluno/logoMecanica.png')}}" class="ml-2 mt-3 imgbtn">
      Professores de Matérias de Mecânicas
    </div>
  </a>
</div>
@endsection