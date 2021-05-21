<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>IFMS</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/nav/nav.css')}}">
  @yield('styles')
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="{{route('principal')}}"> IFMS </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('alunoIndex')}}"> Principal </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{route('materiaIndex')}}">Núcleo Comum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('areaIndex')}}">Materias Tecnicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('professorIndex')}}">Busca por Nome</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>

    <footer>
      <p class="mt-2 mb-3 text muted text-center"> © Alyce Marculino - 2020 </p>
    </footer>
  </div>

  <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.min.js')}}"></script>
  @yield('javascript')
</body>
</html>
