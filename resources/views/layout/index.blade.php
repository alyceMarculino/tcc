<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('styles')
    <title>Document</title>
  </head>

  <body>
    <main role="main" class="container">
      @yield('conteudo')
    </main>
    
    @yield('javascript')
  </body>
</html>