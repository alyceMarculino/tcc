<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('principal');

/* Paginas do aluno, PUBLICAS */
Route::get('/aluno', 'AlunoController@index')->name('alunoIndex');
/* Paginas de curso */
Route::get('/nucleoComum', 'AreaController@listagemNucleoComum')->name('materiaIndex');
Route::get('/curso', 'AreaController@listagemCursos')->name('areaIndex');
/* Paginas de professor*/
Route::get('/professor', 'ProfessorController@index')->name('professorIndex');
/*functions na Controller*/
Route::any('/professor/buscaProfessor/{id}', 'ProfessorController@pegarPermanencia');
Route::any('/professor/buscaProfessor', 'ProfessorController@pegarProfessor')->name('pegarProfessor');
/* Paginas de permanencia */
Route::get('/consulta/{id}', 'AreaController@consulta')->name('consultaPermanencia');

/* Paginas do administrador */
Route::get('/home', 'HomeController@index')->name('listagemProfessoresAdmin')->middleware('auth');
Route::get('/professor/listagem', 'ProfessorController@indexAdmin')->name('professorIndexAdmin')->middleware('auth');
// Administrador parte da permanencia
Route::get('/permanencia/cadastro', 'PermanenciaController@cadastro')->name('permanenciaCadastro')->middleware('auth');
Route::post('/permanencia/salvar', 'PermanenciaController@salvar')->name('permanenciaSalvar')->middleware('auth');
Route::get('/permanencia/edita/{id}', 'PermanenciaController@editar')->middleware('auth');
Route::get('/permanencia/delete/{id}', 'PermanenciaController@excluir')->middleware('auth');
Route::get('/permanencia/excluirTodas', 'PermanenciaController@confirmarExcluirTodas')->name('excluirTodas')->middleware('auth');
Route::get('/permanencia/excluir', 'PermanenciaController@apagarTodasPermanencias')->name('excluirTodasPermanencias')->middleware('auth');
// Administrador Parte do Professor
Route::get('/professorAdmin/consultaNome', 'ProfessorController@consultaAdmin')->name('consultaNomeAdmin')->middleware('auth');
Route::get('/professor/cadastro', 'ProfessorController@cadastro')->name('professorCadastro')->middleware('auth');
Route::post('/professor/salvar', 'ProfessorController@salvar')->name('professorSalvar')->middleware('auth');
Route::get('/professor/edita/{id}', 'ProfessorController@editar')->middleware('auth');
Route::get('/professor/delete/{id}', 'ProfessorController@excluir')->middleware('auth');

// Administrador Parte de Materias
/* Paginas de tipo de areas */
// Route::get('/area/listagem', 'AreaController@listagem')->name('areaListagem')->middleware('auth');
// Route::get('/area/cadastro', 'AreaController@cadastro')->name('areaCadastro')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::any('/registrar', 'HomeController@registrar')->name('registrarNovoAdmin')->middleware('auth');
