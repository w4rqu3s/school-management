<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/alunos', AlunoController::class);

Route::resource('/cursos', CursoController::class);
Route::get('/cursos/{id}/alunos', [CursoController::class, 'indexAlunos'])->name('cursos.alunos');
Route::get('/cursos/{id}/disciplinas', [CursoController::class, 'indexDisciplinas'])->name('cursos.disciplinas');

Route::resource('/disciplinas', DisciplinaController::class);


