@extends('layout.index_nav')

@section('styles')
<link href="{{asset('css/permanencia/consulta.css')}}" rel="stylesheet">
@endsection

@section('conteudo')
  <div class="container">
    <div class="alert alert-success mt-3" role="alert">
      Abaixo estão os horarios de permanencia do Professor {{$professor->nome }}, 
      caso não tenha nenhum dado é por que o professor não possui permanencias cadastradas, 
      neste caso consulte ele pelo email ( {{$professor->email}} ) ou busque a Cordenação 
      para mais informações sobre os horarios de seu professor. Obrigada!
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Dia</th>
            <th scope="col">Inicio</th>
            <th scope="col">Final</th>
            <th scope="col">Sala</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($professor->permanencias as $permanencia)
            <tr>
              <td>{{$permanencia->dia}}</td>
              <td>{{$permanencia->horaInicio}}</td>
              <td>{{$permanencia->horaFinal}}</td>
              <td>{{$permanencia->sala}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection