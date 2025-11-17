<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/alunos', AlunoController::class);
Route::get('/alunos/{aluno}/delete', [AlunoController::class, 'delete'])->name('alunos.delete');

