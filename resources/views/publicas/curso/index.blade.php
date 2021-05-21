@extends('layouts.nav_aluno')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/curso/index-curso.css')}}">
@endsection

@section('content')
  <div class="container-fluid">   
    <a href="{{route('consultaPermanencia', [1])}}" class="card mb-3 btn-outline-success">
      <img src="{{asset('img/aluno/logoComputador.png')}}">
      <p> Professores de Matérias de Informática </p>
    </a>

    <a href="{{route('consultaPermanencia', [2])}}" class="card mb-3 btn-outline-success">
      <img src="{{asset('img/aluno/eletroLogo.png')}}">
      <p> Professores de Matérias de Eletrotécnica </p>
    </a>

    <a href="{{route('consultaPermanencia', [3])}}" class="card mb-3 btn-outline-success">
      <img src="{{asset('img/aluno/logoMecanica.png')}}">
      <p> Professores de Matérias de Mecânicas </p>
    </a>
  </div>
@endsection