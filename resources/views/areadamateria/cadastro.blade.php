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

    <form action="{{route('areaSalvar')}}" method="POST">
      @csrf
      <div class="form-row ">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nome" id="nomeCompleto" name="nome">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Descrição" id="nome_usual" name="nome">
        </div>
      </div>

      <div class="form-row mt-3">
        <div class="col">
          <button type="submit" class="btn btn-outline-success btn-block" name="adicionar" value="adicionar"> 
            Adicionar Nova Area ao Sistema 
          </button>
        </div>
      </div>
    </form>
  </div>
@endsection