<?php

namespace App\Http\Controllers;
use App\Professor;
use App\Permanencia;
use App\Area;
use Illuminate\Http\Request;

class PermanenciaController extends Controller {

  public function cadastro(){
    $professores = Professor::orderBy('nome', 'asc')->get();
    $areas = Area::all();
    $permanencia = Permanencia::all();
    return view('administrador.permanencia.cadastro', compact('professores', 'areas', 'permanencia'));
  }

  public function salvar(Request $request) {
    $id = $request->input('id');
    if ($id=="") { // novo
      $permanencia = new Permanencia();
    } else { // alteração
      $permanencia = Permanencia::find($id);
    }
    $permanencia->professor_id = $request->input('idDoProfessor');
    $permanencia->dia = $request->input('diaDaSemana');
    $permanencia->horaInicio = $request->input('horaInicio');
    $permanencia->horaFinal = $request->input('horaFinal');
    $permanencia->sala = $request->input('salaDaPermanencia');
    $permanencia->save();
    return redirect('/professor/listagem');
  }

  public function editar($id) {
    $professores = Professor::all();
    $areas = Area::all();
    $permanencia = Permanencia::find($id);
    return view('administrador.permanencia.editar', compact('professores', 'areas', 'permanencia'));
  }

  public function excluir($id) {
    $permanencia = Permanencia::find($id);
    $permanencia->delete();
    return redirect('/professor/listagem');
  }

  public function confirmarExcluirTodas(){
    return view('administrador.permanencia.confirmacao');
  }

  public function apagarTodasPermanencias(){
    Permanencia::truncate();
    $professores = Professor::orderBy('nome', 'asc')->paginate(25);
    return view('administrador.professor.listagem', compact('professores'));
  }
}
