<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Area;
use App\Professor;

class AreaController extends Controller{
  
  public function index(){
    return view('curso.index');
  }

  public function lista() {
    return view('materia.index');
  }

  public function listaAdmin() {
    $areas = Area::all();
    return view('areasdamateria.listagem', compact('areas'));
  }

  public function consulta($id){
    $area = Area::find($id);
    return view('curso.consulta', compact('area'));
  }
}
