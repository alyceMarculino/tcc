@extends('layouts.nav_admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"> 
            Verifique seu endereço de e-mail 
          </div>

          <div class="card-body">
            @if (session('resent'))
              <div class="alert alert-success" role="alert">
                Um novo link de verificação foi enviado para o seu endereço de e-mail.
              </div>
            @endif
            Antes de continuar, verifique seu e-mail para obter um link de verificação.
            Se você não recebeu o e-mail, <a href="{{ route('verification.resend') }}"> clique aqui para solicitar outro </a>.
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
