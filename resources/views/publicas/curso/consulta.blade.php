@extends('layouts.nav_aluno')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/curso/consulta.css')}}">
@endsection

@section('content') 
  <div class="listaDeProfessores">
    <h2> Lista de Professores de/o {{$area->nome}} </h2>

    <div id="accordion">
      @foreach ($area->professores as $professor)
      <div class="card mt-3">
        <div class="card-header" id="heading{{$professor->id}}">
          <h5 class="mb-0 headerColapseProfessor">
            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$professor->id}}" aria-expanded="false" aria-controls="collapse{{$professor->id}}">
            {{$professor->nome_usual}}
            </a>
          </h5>
        </div>

        <div id="collapse{{$professor->id}}" class="collapse" aria-labelledby="heading{{$professor->id}}" data-parent="#accordion">
          <div class="card-body">
          <div class="alert alert-info" role="alert">
            Caso não haja permanencias cadastradas entre em contato com o professor pelo email {{$professor->email}}, ou entre em contato com a coordenação.
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
                      <td scope="row">{{$permanencia->dia}}</td>
                      <td>{{$permanencia->horaInicio}}</td>
                      <td>{{$permanencia->horaFinal}}</td>
                      <td>{{$permanencia->sala}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div> 
@endsection