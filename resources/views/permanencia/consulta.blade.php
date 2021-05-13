@extends('layout.index_nav')

@section('styles')
<link href="{{asset('css/permanencia/listagem.css')}}" rel="stylesheet">
@endsection

@section('content')
  <div class="container">
    @foreach ($professor->permanencias as $permanencia)
      <div class="permanencia">
        <p> {{$permanencia->dia }} - {{$permanencia->horaInicio}} </p>
      </div>  
    @endforeach
  </div>
@endsection