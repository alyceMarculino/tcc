@extends('layout.index')

@section('styles')
  <link href="{{ asset('css/index.css') }}" rel="stylesheet"> 
@endsection

@section('conteudo')
  <p class="titulo"> Sistemas de Controle de Permanências do Instituto Federal de Mato Grosso do Sul - IFMS Campus Campo Grande </p>
  <div class="flex">
    <div class="bloco">
      <img src="img/iconeAlunos2.png">
      <b> Sistema dos Alunos </b>
      <a href="{{route('alunoIndex')}}" class="btn btn-success"> Sou Aluno </a>
    </div>
    
    <div class="bloco">
      <img src="img/iconeAdmin.png">
      <b> Sistema do Administrador </b>
      <a href="{{route('home')}}" class="btn btn-success"> Sou Administrador </a>
    </div>
  </div>
@endsection