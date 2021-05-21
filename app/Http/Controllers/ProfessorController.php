<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Professor;
use App\Permanencia;
use App\Area;
use Validator;

class ProfessorController extends Controller {

  public function index(){
    $professores = Professor::orderBy('nome', 'asc')->get();
    return view('publicas.professor.index')-> with('professores', $professores);
  }

  public function indexAdmin(){
    $professores = Professor::orderBy('nome', 'asc')->paginate(25);
    return view('administrador.professor.listagem', compact('professores'));
  }

  public function cadastro(){
    $professor = new Professor();
    $areas = Area::all();
    return view('administrador.professor.cadastro', compact('professor', 'areas'));
  }
  
  public function editar($id) {
    $professor = Professor::find($id);
    $areas = Area::all();
    return view('administrador.professor.cadastro', compact('professor', 'areas'));
  }   

  public function consultaAdmin(){
    $professores = Professor::orderBy('nome', 'asc')->get();
    return view('administrador.professor.consulta')-> with('professores', $professores);
  }

  public function salvar(Request $request) {
    $id = $request->input('id');
    if ($id=="") { // novo
      $professor = new Professor();
    } else { // alteração
      $professor = Professor::find($id);
    }
    $professor->nome = $request->input('nome');
    $professor->nome_usual = $request->input('nome_usual');
    $professor->email = $request->input('email');
    $professor->area_id = $request->input('idDaArea');
    $professor->save();
    return redirect('/professor/listagem');
  }


  public function pegarProfessor(Request $request){
    $search = !empty($request->term) ? $request->term : '' ;

    if($search == ''){
      return;
    }
    else{
      $professores = Professor::orderBy('nome', 'asc')
      ->where("nome", "like", "%".$search."%")
      ->limit(10)
      ->get();
    }
    $response = array();
    foreach ($professores as $professor) {
      $response[]= array(
        "id" => $professor->id,
        "text" => $professor->nome,
      );
    }
    return response()->json(["results" => $response]);
  }
  
  public function pegarPermanencia($id){
    $professor = Professor::find($id);
    return response()->json(["professor" => $professor,
    "permanencias" => $professor->permanencias]);
  }
  
}
