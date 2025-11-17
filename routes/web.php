<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/alunos', AlunoController::class);
Route::resource('/cursos', CursoController::class);

