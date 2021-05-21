@extends('layout.index_nav')
@section('styles')

@endsection

@section('conteudo')
  <h1>Listagem de Aréas Cadastradas</h1>
  <table class="table table-striped table-hover table-bordered">
    <thead class="table-dark">
      <tr>
        <th> Nome </th>
        <th> Descrição </th>
        <th> Ações </th>
      </tr>
    </thead>
    <tbody >
      @foreach($areas as $area)
      <tr>
        <td> {{$area->nome }} </td>
        <td> {{$area->descricao}} </td>
        <td colspan="3"> 
          <a class="btn btn-outline-secondary" href='/areadamateria/edita/{{$areadamateria->id}}'>Editar</a>
          <a class="btn btn-outline-danger" href='/areadamateria/delete/{{$areadamateria->id}}'>Excluir</a> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection