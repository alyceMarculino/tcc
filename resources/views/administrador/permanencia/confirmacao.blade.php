@extends('layouts.nav_admin')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/permanencia/excluirTodas.css')}}">
@endsection

@section('content')
  <div class="mensagemDeConfirmacao">
    <h2>ATENÇÃO, ESSA AÇÃO É IRREVERSÍVEL!</h2>
    <p> Cuidado, e exclusão de <b>TODAS AS PERMANÊNCIAS, DE TODOS OS PROFESSORES</b> e só deve ser feita uma unica vez ao termino de um semestre. </p>
    <p> Ao executar essa ação ela não será reversivel em <b>NENHUMA</b> hipotese. </p>
    <div class="botoes mt-3">
      <a href="{{route('professorIndexAdmin')}}" type="button" class="btn btn-secondary">
        Cancelar
      </a>
      <a href="{{route('excluirTodasPermanencias')}}" type="button" class="btn btn-danger">
        Apagar Todas as Permanências
      </a>
    </div>
    
  </div>
@endsection