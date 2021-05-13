@extends('layouts.app')

@section('styles')
<link href="{{asset('css/permanencia/listagem.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Horario</th>
        <th scope="col">Segunda</th>
        <th scope="col">Terça</th>
        <th scope="col">Quarta</th>
        <th scope="col">Quinta</th>
        <th scope="col">Sexta</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <th scope="row">07:00</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">07:45</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">08:30</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">09:15</th>
        <td colspan="5"> INTERVALO </td>
      </tr>
      <tr>
        <th scope="row">09:35</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">10:20</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">11:05</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>

  </table>

  <table class="table table-hover">
    <thead>
      <tr> HORARIOS DA TARDE </tr>
      <tr>
        <th scope="col">Horario</th>
        <th scope="col">Segunda</th>
        <th scope="col">Terça</th>
        <th scope="col">Quarta</th>
        <th scope="col">Quinta</th>
        <th scope="col">Sexta</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">13:00</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">13:45</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">14:30</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">15:15</th>
        <td colspan="5"> INTERVALO </td>
      </tr>
      <tr>
        <th scope="row">15:35</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">16:20</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">17:05</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

  <table class="table table-hover">
    <thead>
      <tr> HORARIOS NOTURNOS </tr>
      <tr>
        <th scope="col">Horario</th>
        <th scope="col">Segunda</th>
        <th scope="col">Terça</th>
        <th scope="col">Quarta</th>
        <th scope="col">Qui nta</th>
        <th scope="col">Sexta</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">18:35</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">19:10</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">20:00</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">21:00</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

@endsection