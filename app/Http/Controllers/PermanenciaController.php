<?php

namespace App\Http\Controllers;
use App\Professor;
use App\Permanencia;
use App\Area;
use Illuminate\Http\Request;

class PermanenciaController extends Controller {

  public function listarTodas(){
    $permanencias = Permanencia::all();
    return view('permanencia.listar')-> with('permanencias', $permanencias);
  }

  public function cadastro(){
    $professores = Professor::all();
    $areas = Area::all();
    $permanencia = Permanencia::all();
    return view('permanencia.cadastro', compact('professores', 'areas', 'permanencia'));
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
    return redirect('/professorAdmin');
  }

  public function editar($id) {
    $professores = Professor::all();
    $areas = Area::all();
    $permanencia = Permanencia::find($id);
    return view('permanencia.editar', compact('professores', 'areas', 'permanencia'));
  }

  public function excluir($id) {
    $permanencia = Permanencia::find($id);
    $permanencia->delete();
    return redirect('/professorAdmin');
  }
}
