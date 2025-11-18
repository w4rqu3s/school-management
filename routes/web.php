<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;

Route::get('/', function() {
    return redirect()->route('home');
});

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware(['auth', 'verified']);

Route::resource('/alunos', AlunoController::class)
    ->middleware(['auth', 'verified']);
Route::get('/alunos/{id}/report', [AlunoController::class, 'report'])->name('alunos.report')
    ->middleware(['auth', 'verified']);

Route::resource('/cursos', CursoController::class)
    ->middleware(['auth', 'verified']);
Route::get('/cursos/{id}/alunos', [CursoController::class, 'indexAlunos'])->name('cursos.alunos')
    ->middleware(['auth', 'verified']);
Route::get('/cursos/{id}/disciplinas', [CursoController::class, 'indexDisciplinas'])->name('cursos.disciplinas')
    ->middleware(['auth', 'verified']);

Route::resource('/disciplinas', DisciplinaController::class)
    ->middleware(['auth', 'verified']);

// Rotas geradas pelo breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
