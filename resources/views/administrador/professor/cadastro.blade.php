@extends('layouts.nav_admin')
@section('styles')
<link rel="stylesheet" href="{{asset('css/professor/cadastroAdmin.css')}}">
@endsection

@section('content')
<div class="container-fluid">
  <form action="{{route('professorSalvar')}}" method="POST">
    @csrf
    <div class="form-row">
      <div class="col-sm-4 col-md-3 col-lg-3"> 
        <label for="id" class="visually-hidden"> Identificador do Sistema </label>
        <input readonly type="text" class="form-control" id="id" name="id" value="{{$professor->id}}">
      </div>
      <div class="col-sm-4 col-md-6 col-lg-6">
        <label for="nomeCompleto" class="visually-hidden"> Nome Completo </label>
        <input type="text" class="form-control" placeholder="Nome Completo do Professor" id="nomeCompleto" name="nome" value="{{ old('nome', $professor->nome)}}">
      </div>
      <div class="col-sm-4 col-md-3 col-lg-3">
        <label for="nome_usual" class="visually-hidden"> Nome Usual </label>
        <input type="text" class="form-control" placeholder="Nome Usual (Nome e Sobrenome)" id="nome_usual" name="nome_usual" value="{{ old('nome_usual', $professor->nome_usual)}}">
      </div>
    </div>

    <div class="form-row mt-3">
      <div class="col-sm-4 col-md-8 col-lg-8">
        <label for="email" class="visually-hidden"> Email do Professor </label>
        <input type="email" class="form-control" placeholder="nome.sobrenome@ifms.edu.br" name="email" value="{{ old('email', $professor->email)}}">
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <label for="idDaArea" class="visually-hidden"> Aréa de Atuação </label>
        <select class="form-control" name="idDaArea">
          @foreach($areas as $area)
          <option value="{{$area->id}} {{old('areadamateria_id', $professor->areadamateria_id) == $area->id ? 'selected' : ''}}">{{$area->nome}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row mt-4">
      <div class="col botaoEsquerda">
        <p></p>
        <button type="submit" class="btn btn-outline-success" name="adicionar" value="adicionar"> 
          Salvar Dados do Professor
        </button>
      </div>
    </div>
  </form>

</div>
@endsection