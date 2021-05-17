@extends('layouts.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/professor/nomeAdmin.css')}}">
@endsection

@section('content')
  <div class="alert alert-info" role="alert">
    Abaixo terá a tabela com os horarios dos professores cadastrados 
    no sistema com seus respectivos horarios de permanencia, 
    clique no nome para expandir e aparecer os horarios de permanencias.
  </div>

  <div id="accordion">
    @foreach ($professores as $professor)
      <div class="card mt-2">
        <div class="card-header" id="heading{{$professor->id}}">
          <h5 class="mb-0 headerColapseProfessor">
            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$professor->id}}" aria-expanded="false" aria-controls="collapse{{$professor->id}}">
            {{$professor->nome}}
            </a>
            <a href='/professor/edita/{{$professor->id}}' type="button" class="btn btn-outline-info">Editar Dados do Professor</a>
          </h5>
        </div>

        <div id="collapse{{$professor->id}}" class="collapse" aria-labelledby="heading{{$professor->id}}" data-parent="#accordion">
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                  <tr>
                    <th scope="col">Dia</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Final</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($professor->permanencias as $permanencia)
                    <tr>
                      <td scope="row">{{$permanencia->dia}}</td>
                      <td>{{$permanencia->horaInicio}}</td>
                      <td>{{$permanencia->horaFinal}}</td>
                      <td>{{$permanencia->sala}}</td>
                      <td >
                        <a href='/permanencia/edita/{{$permanencia->id}}' type="button" 
                          class="btn btn-outline-primary">Editar </a>
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
    <div class="linksDePaginacao">
      {{$professores->links()}}
    </div>
  </>
@endsection