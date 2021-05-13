@extends('layout.index_nav')
@section('styles')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/professor/nome.css')}}">
@endsection

@section('conteudo')
  <section class="container">
    <select class="professorPesquisado">
      <option value="default" selected="selected">Selecione o nome do professor</option>
    </select>

  </section>

  <section id="dadosProfessor" class="container d-none">
    <h2> Professor: <span id="nomeProfessor">  </span> </h2>
    <div class="alert alert-warning d-none">
      <p>Professor não possui permanencia</p>
    </div>

    <div>
      <table id="tabelaPermanencia" class="table table-bordered table-hover mt-3 d-none">
        <thead>
          <tr>
            <th scope="col">Dia</th>
            <th scope="col">Horario</th>
            <th scope="col">Sala</th>
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
      console.log(idSelecionado);
      if(!idSelecionado.length){
        return;
      }
      $.get(
        "/professor/buscaProfessor/"+idSelecionado,
        function (data) {
          dadosProfessor.find('.alert').addClass('d-none');
          tabelaPermanencia.find('.alert').addClass('d-none');
          if(!data.professor){
            dadosProfessor.addClass('d-none');
            return;
          }
          dadosProfessor.removeClass('d-none');
          nomeProfessor.html(data.professor.nome);
          if(!data.permanencias.length){
            dadosProfessor.find('.alert').removeClass('d-none');
            return;
          }
          completarTabela(data.permanencias);
        },
        'JSON'
      )

      function completarTabela(dados) {
        console.log(dados);
        tabelaPermanencia.find('tbody').html('');
        tabelaPermanencia.removeClass('d-none');
        dados.map((dado)=>{
          console.log(dado);
          tabelaPermanencia.find('tbody').append(
            `
              <tr>
                <td>${dado.dia}</td>
                <td>${dado.hora}</td>
                <td>${dado.sala}</td>
              </tr>
            `
          )
        })
      }
    });

  </script>
@endsection
