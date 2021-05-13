@extends('layout.index_nav')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/professor/nome.css')}}">
@endsection

@section('conteudo')
  <h2>Permanencias do Professor <span>{{$professor->nome}}</span></h2>

  <table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">Dia</th>
        <th scope="col">Horario</th>
        <th scope="col">Sala</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($professor->permanencias as $permanencia)
        <tr>
          <td scope="row">{{$permanencia->dia}}</td>
          <td>{{$permanencia->horaInicio}}</td>
          <td>{{$permanencia->horaFinal}}</td>
          <td>{{$permanencia->sala}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endif
@endsection