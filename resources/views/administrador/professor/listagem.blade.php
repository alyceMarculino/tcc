@extends('layouts.nav_admin')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/professor/listagemAdmin.css')}}">
@endsection

@section('content')
  <div class="alert alert-info" role="alert">
  Abaixo terá a tabela com os horários dos professores cadastrados no 
  sistema com seus respectivos horários de permanência, 
  clique no nome para expandir e aparecer os horários de permanências.
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
                            class="btn btn-outline-primary botoesRedondos" title="Editar Permanência">
                            <img src="{{asset('img/iconesSVG/pen.svg')}}"> 
                          </a>
                          <a href='/permanencia/delete/{{$permanencia->id}}'type="button" 
                            class="btn btn-outline-danger botoesRedondos" title="Apagar Permanência">
                            <img src="{{asset('img/iconesSVG/trash.svg')}}">
                          </a>
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
  </div>
@endsection