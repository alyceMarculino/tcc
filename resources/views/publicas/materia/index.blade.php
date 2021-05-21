@extends('layouts.nav_aluno')
@section('styles')
<link rel="stylesheet" href="{{asset('css/materia/index-materia.css')}}">
@endsection

@section('content')
<div class="container-materias">      
  <a href="{{route('consultaPermanencia', [5])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconePort.png')}}">
    <p class="mt-1"> Port. Inglês e Espanhol </p>
  </a>     
     
  <a href="{{route('consultaPermanencia', [7])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeEdFisica.png')}}">
    <p class="mt-1"> Educação Física </p>
  </a>   

  <a href="{{route('consultaPermanencia', [8])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeArtes.png')}}">
    <p class="mt-1"> Arte </p>
  </a>  

  <a href="{{route('consultaPermanencia', [9])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeHistoria.png')}}">
    <p class="mt-1"> História </p>
  </a>    

  <a href="{{route('consultaPermanencia', [10])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeGeografia.png')}}">
    <p class="mt-1"> Geografia </p>
  </a>    

  <a href="{{route('consultaPermanencia', [11])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeMatematica.png')}}">
    <p class="mt-1"> Matemática </p>
  </a>  

  <a href="{{route('consultaPermanencia', [12])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeFisica.png')}}">
    <p class="mt-1"> Física </p>
  </a>   

  <a href="{{route('consultaPermanencia', [13])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeQuimica.png')}}">
    <p class="mt-1"> Química </p>
  </a>    

  <a href="{{route('consultaPermanencia', [14])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeBiologia.png')}}">
    <p class="mt-1">  Biologia </p>
  </a>   

  <a href="{{route('consultaPermanencia', [15])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeFilosofia.png')}}">
    <p class="mt-1"> Filosofia </p>
  </a>  

  <a href="{{route('consultaPermanencia', [16])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeSociologia.png')}}">
    <p class="mt-1"> Sociologia </p>
  </a> 

  <a href="{{route('consultaPermanencia', [17])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconesIngles.png')}}">
    <p class="mt-1"> Educação Especial </p>
  </a>   

  <a href="{{route('consultaPermanencia', [18])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconePedagogia.png')}}">
    <p class="mt-1"> Pedagogia </p>
  </a>   

  <a href="{{route('consultaPermanencia', [19])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeAdministracao.png')}}">
    <p class="mt-1"> Administração </p>
  </a>   

  <a href="{{route('consultaPermanencia', [20])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconeMetodologia.png')}}">
    <p class="mt-1"> Metodologia </p>
  </a>  

  <a href="{{route('consultaPermanencia', [21])}}" class="btn btn-outline-success">
    <img src="{{asset('img/aluno/iconePiano.png')}}">
    <p class="mt-1"> Piano/Música </p>
  </a>   
  
</div>
@endsection