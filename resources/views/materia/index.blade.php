@extends('layout.index_nav')
@section('styles')
<link rel="stylesheet" href="{{asset('css/materia/index-materia.css')}}">
@endsection

@section('conteudo')
<div class="container">      
  <a href="{{route('cursoConsulta', [5])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconePort.png')}}">
    <p class="mt-1"> Portugues </p>
  </a>     
      
  <a href="{{route('cursoConsulta', [6])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconesIngles.png')}}">
    <p class="mt-1"> Inglês </p>
  </a>     

  <a href="{{route('cursoConsulta', [7])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeEdFisica.png')}}">
    <p class="mt-1"> Educação Física </p>
  </a>   

  <a href="{{route('cursoConsulta', [8])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeArtes.png')}}">
    <p class="mt-1"> Arte </p>
  </a>  

  <a href="{{route('cursoConsulta', [9])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeHistoria.png')}}">
    <p class="mt-1"> História </p>
  </a>    

  <a href="{{route('cursoConsulta', [10])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeGeografia.png')}}">
    <p class="mt-1"> Geografia </p>
  </a>    

  <a href="{{route('cursoConsulta', [11])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeMatematica.png')}}">
    <p class="mt-1"> Matemática </p>
  </a>  

  <a href="{{route('cursoConsulta', [12])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeFisica.png')}}">
    <p class="mt-1"> Física </p>
  </a>   

  <a href="{{route('cursoConsulta', [13])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeQuimica.png')}}">
    <p class="mt-1"> Química </p>
  </a>    

  <a href="{{route('cursoConsulta', [14])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeBiologia.png')}}">
    <p class="mt-1">  Biologia </p>
  </a>   

  <a href="{{route('cursoConsulta', [15])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeFilosofia.png')}}">
    <p class="mt-1"> Filosofia </p>
  </a>  

  <a href="{{route('cursoConsulta', [16])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeSociologia.png')}}">
    <p class="mt-1"> Sociologia </p>
  </a> 
  
</div>
@endsection