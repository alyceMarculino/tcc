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
    return view('index.inicio');
})->name('principal');

/* Paginas de aluno */
Route::get('/aluno', 'AlunoController@index')->name('alunoIndex');

/* Paginas de professor*/
Route::get('/professor', 'ProfessorController@index')->name('professorIndex');
Route::any('/professor/buscaProfessor', 'ProfessorController@pegarProfessor')->name('pegarProfessor');
Route::get('/professor/buscaProfessor/{id}', 'ProfessorController@verPermanencia2')->name('pegarPermanencia');

/* Paginas de curso */
Route::get('/curso', 'AreaController@index')->name('areaIndex');
Route::get('/nucleoComum', 'AreaController@lista')->name('materiaIndex');
Route::get('/curso/consulta/{curso}', 'AreaController@consulta')->name('cursoConsulta');

/* Paginas de permanencia */

/* Paginas do administrador */
// Administrador parte da permanencia
Route::get('/permanencia/listar', 'PermanenciaController@listarTodas')->name('permanenciaListar');
Route::get('/permanencia/cadastro', 'PermanenciaController@cadastro')->name('permanenciaCadastro')->middleware('auth');
Route::post('/permanencia/salvar', 'PermanenciaController@salvar')->name('permanenciaSalvar')->middleware('auth');
Route::get('/permanencia/edita/{id}', 'PermanenciaController@editar')->middleware('auth');
Route::get('/permanencia/delete/{id}', 'PermanenciaController@excluir')->middleware('auth');
// Administrador Parte do Professor
Route::get('/professorAdmin', 'ProfessorController@indexAdmin')->name('professorIndexAdmin')->middleware('auth');
Route::get('/professor/cadastro', 'ProfessorController@cadastro')->name('professorCadastro')->middleware('auth');
Route::post('/professor/salvar', 'ProfessorController@salvar')->name('professorSalvar')->middleware('auth');
Route::get('/professor/edita/{id}', 'ProfessorController@editar')->middleware('auth');
Route::get('/professor/delete/{id}', 'ProfessorController@excluir')->middleware('auth');
// Administrador Parte de Materias
/* Paginas de tipo de materias */
Route::get('/areadamateria/listagem', 'AreaController@listaAdmin')->name('listagem')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
