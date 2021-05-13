@extends('layouts.app')
@section('styles')

  <link rel="stylesheet" href="{{asset('css/professor/nomeAdmin.css')}}">
@endsection

@section('content')
  <div class="alert alert-success" role="alert">
    Abaixo terá a tabela com os horarios dos professores cadastrados no sistema com seus respectivos horarios de permanencia, clique no nome para expandir.
  </div>
  <div id="accordion">
    @foreach ($professores as $professor)
      <div class="card mt-2">
        <div class="card-header" id="heading{{$professor->id}}">
          <h5 class="mb-0 headerColapseProfessor">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$professor->id}}" aria-expanded="false" aria-controls="collapse{{$professor->id}}">
            {{$professor->nome}}
            </button>
            <a href='/professor/edita/{{$professor->id}}' type="button" class="btn btn-outline-success">Editar Dados do Professor</a>
          </h5>
        </div>

        <div id="collapse{{$professor->id}}" class="collapse" aria-labelledby="heading{{$professor->id}}" data-parent="#accordion">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">Dia</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($professor->permanencias as $permanencia)
                    <tr>
                      <td scope="row">{{$permanencia->dia}}</td>
                      <td>{{$permanencia->hora}}</td>
                      <td>{{$permanencia->sala}}</td>
                      <td >
                        <a href='/permanencia/edita/{{$permanencia->id}}' type="button" 
                          class="btn btn-outline-warning">Editar </a>
                        <a href='/permanencia/delete/{{$permanencia->id}}'type="button" 
                          class="btn btn-outline-danger">Apagar</a>
                      </td>
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
@endsection