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
Route::resource('/disciplinas', DisciplinaController::class);


