@extends('layouts.app')
@section('styles')
  <link rel="stylesheet" href="{{asset('css/permanencia/cadastro.css')}}">
@endsection

@section('content')
  <div class="container">
    <form action="{{route('permanenciaSalvar')}}" method="POST">
      @csrf
        <div class="row">
          <div class="col-sm-2">
            <input readonly type="text" class="form-control" id="id" name="id" placeholder="Id - Campo automatico" value="{{old('id', $permanencia->id)}}">
          </div>
          <div class="col">
            <select class="form-control" name="idDoProfessor" >
              @foreach($professores as $professor)
                <option value="{{$professor->id}}">{{$professor->nome}}</option>
              @endforeach
            </select>
          </div>
        </div>

      <div class="row mt-4">
        <div class="col">
          <select class="form-control" id="diaDaSemana" name="diaDaSemana">
            <option value="{{old('dia', $permanencia->dia)}}"> {{old('dia', $permanencia->dia)}} </option>
            <option value="Segunda"> Segunda </option>
            <option value="Terça"> Terça </option>
            <option value="Quarta"> Quarta </option>
            <option value="Quinta"> Quinta </option>
            <option value="Sexta"> Sexta </option>
          </select>
        </div>
        <div class="col">
          <select class="form-control" id="horaInicio" name="horaInicio">
            <option value="{{old('horaInicio', $permanencia->horaInicio)}}"> {{old('horaInicio', $permanencia->horaInicio)}} </option>

            <optgroup label="Manhã">
              <option value="07:00">07hrs</option>
              <option value="07:45">07:45hrs</option>
              <option value="08:30">08:30hrs</option>
              <option value="09:35">09:35hrs</option>
              <option value="10:20">10:20hrs</option>
              <option value="11:05">11:05hrs</option>
              <option value="11:50">11:50hrs</option>
            </optgroup>

            <optgroup label="Tarde">
              <option value="13:00">13hrs</option>
              <option value="13:45">13:45hrs</option>
              <option value="14:30">14:30hrs</option>
              <option value="15:35">15:35hrs</option>
              <option value="16:20">16:20hrs</option>
              <option value="17:05">17:05hrs</option>
              <option value="17:50">17:50hrs</option>
            </optgroup>

            <optgroup label="Noite">
              <option value="18:50">18:50hrs</option>
              <option value="19:35">19:35hrs</option>
              <option value="20:20">20:20hrs</option>
              <option value="21:15">21:15hrs</option>
              <option value="22:00">22:00hrs</option>
            </optgroup>
          </select>
          <select class="form-control" id="horaFinal" name="horaFinal">
            <option value="{{old('horaFinal', $permanencia->horaFinal)}}"> {{old('horaFinal', $permanencia->horaFinal)}} </option>

            <optgroup label="Manhã">
              <option value="07:00">07hrs</option>
              <option value="07:45">07:45hrs</option>
              <option value="08:30">08:30hrs</option>
              <option value="09:35">09:35hrs</option>
              <option value="10:20">10:20hrs</option>
              <option value="11:05">11:05hrs</option>
              <option value="11:50">11:50hrs</option>
            </optgroup>

            <optgroup label="Tarde">
              <option value="13:00">13hrs</option>
              <option value="13:45">13:45hrs</option>
              <option value="14:30">14:30hrs</option>
              <option value="15:35">15:35hrs</option>
              <option value="16:20">16:20hrs</option>
              <option value="17:05">17:05hrs</option>
              <option value="17:50">17:50hrs</option>
            </optgroup>

            <optgroup label="Noite">
              <option value="18:50">18:50hrs</option>
              <option value="19:35">19:35hrs</option>
              <option value="20:20">20:20hrs</option>
              <option value="21:15">21:15hrs</option>
              <option value="22:00">22:00hrs</option>
            </optgroup>
          </select>
        </div>
        <div class="col">
          <select class="form-control" id="salaDaPermanencia" name="salaDaPermanencia">
            <option value="{{old('sala', $permanencia->sala)}}"> {{old('sala', $permanencia->sala)}} </option>
            <option value="A101"> A101 </option>
            <option value="B101"> B101 </option>
            <option value="C101"> C101 </option>
            <option value="D101"> D101 </option>
            <option value="E101"> E101 </option>
          </select>
        </div>
        <div class="col">
          <button type="submit" id="adicionarHorario" onClick="adcPermanencia()" class="btn btn-success">Adicionar Horario</button>
        </div>
      </div>
    </form>    
  </div>
@endsection