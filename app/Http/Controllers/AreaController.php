<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Area;
use App\Professor;

class AreaController extends Controller{
  
  public function listagemCursos(){
    return view('publicas.curso.index');
  }

  public function listagemNucleoComum() {
    return view('publicas.materia.index');
  }

  public function listaAdmin() {
    $areas = Area::all();
    return view('areasdamateria.listagem', compact('areas'));
  }

  public function consulta($id){
    $area = Area::find($id);
    return view('publicas.curso.consulta', compact('area'));
  }
}
