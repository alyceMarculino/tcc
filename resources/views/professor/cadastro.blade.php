@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('css/professor/cadastroAdmin.css')}}">
@endsection

@section('content')
<div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('professorSalvar')}}" method="POST">
    @csrf
    <div class="form-row ">
      <div class="col-mds-1"> 
        <input readonly type="text" class="form-control" id="id" name="id" value="{{$professor->id}}">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Nome Completo do Professor" id="nomeCompleto" name="nome" value="{{ old('nome', $professor->nome)}}">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Nome Usual (Nome e Sobrenome)" id="nome_usual" name="nome_usual" value="{{ old('nome_usual', $professor->nome_usual)}}">
      </div>
    </div>

    <div class="form-row mt-3">
      <div class="col">
        <input type="email" class="form-control" placeholder="Email@ifms.edu.br" name="email" value="{{ old('email', $professor->email)}}">
      </div>
      <div class="col">
        <select class="form-control" name="idDaArea">
          @foreach($areas as $area)
          <option value="{{$area->id}} {{old('areadamateria_id', $professor->areadamateria_id) == $area->id? 'selected' : ''}}">{{$area->nome}}</option>
          @endforeach
        </select>
      </div>
      <div class="col">
        <button type="submit" class="btn btn-outline-success btn-block" name="adicionar" value="adicionar"> 
          Adicionar Novo Professor no Sistema 
        </button>
      </div>
    </div>
  </form>

</div>
@endsection