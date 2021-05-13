<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class HomeController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index() {
    $professores = Professor::all();
    return view('professor.indexAdmin')-> with('professores', $professores);
  }
}