@extends('layouts.nav_admin')
@section('styles')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/professor/nome.css')}}">
@endsection

@section('content')
  <section class="container-input">
    <select class="professorPesquisado">
      <option value="default" selected="selected">Digite o nome do professor</option>
    </select>
  </section>

  <section id="dadosProfessor" class="container d-none">
    <h2> Professor(a): <span id="nomeProfessor">  </span> </h2>
    <div class="alert alert-warning d-none">
      <p> Professor não possui permanência até o momento. </p>
    </div>

    <div class="table-responsive">
      <table id="tabelaPermanencia" class="table table-bordered table-striped mt-3 d-none">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Dia</th>
            <th scope="col">Inicio</th>
            <th scope="col">Termino</th>
            <th scope="col">Sala</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
         
        </tbody>
      </table>
    </div>
  </section>
@endsection

@section('javascript')
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    const nomeProfessor = $("#nomeProfessor");
    const dadosProfessor = $("#dadosProfessor");
    const tabelaPermanencia = $("#tabelaPermanencia");

    $('.professorPesquisado').select2({
      ajax: {
        url: '{{route('pegarProfessor')}}',
        dataType: 'json',
        theme: "classic"
      }
    });

    $('.professorPesquisado').change(function() {
      var idSelecionado = ($(this).val());
      if(!idSelecionado.length){
        return;
      }
      $.get(
        "/professor/buscaProfessor/"+idSelecionado,
        function (data) {
          console.log("passo 1")
          dadosProfessor.find('.alert').addClass('d-none');
          tabelaPermanencia.find('.alert').addClass('d-none');
          if(!data.professor){
            dadosProfessor.addClass('d-none');
            return;
            console.log("passo 2")
          }
          dadosProfessor.removeClass('d-none');
          nomeProfessor.html(data.professor.nome);
          if(!data.permanencias.length){
            console.log("passo 3")
            dadosProfessor.find('.alert').removeClass('d-none');
            tabelaPermanencia.find('.alert').addClass('d-none');
            return;
          }
          completarTabela(data.permanencias);
        },
        'JSON'
      )

      function completarTabela(dados) {
        console.log("passo 4");
        tabelaPermanencia.find('tbody').html('');
        tabelaPermanencia.removeClass('d-none');
        dados.map((dado)=>{
          tabelaPermanencia.find('tbody').append(
            `
              <tr>
                <td>${dado.dia}</td>
                <td>${dado.horaInicio}</td>
                <td>${dado.horaFinal}</td>
                <td>${dado.sala}</td>
                <td >
                  <a href='/permanencia/edita/${dado.id}}' type="button" class="btn btn-outline-primary botoesRedondos" title="Editar Permanência">
                    <img src="{{asset('img/iconesSVG/pen.svg')}}">
                  </a>
                  <a href='/permanencia/delete/${dado.id}}' type="button" class="btn btn-outline-danger botoesRedondos"  title="Apagar Permanência">
                    <img src="{{asset('img/iconesSVG/trash.svg')}}">
                  </a>
                </td>
              </tr>
            `
          )
        })
      }
    });

  </script>
@endsection
