<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use \App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Curso::class);

        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function indexAlunos(string $id) {
        Gate::authorize('viewDiscents', Curso::class);

        $curso = Curso::find($id);
        $alunos = $curso->alunos;

        return view('alunos.index', compact('alunos'));
    }

    public function indexDisciplinas(string $id) {
        Gate::authorize('viewClasses', Curso::class);

        $curso = Curso::find($id);
        $disciplinas = $curso->disciplinas;

        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        Gate::authorize('create', Curso::class);

        return view('cursos.create');
    }

    public function store(Request $request)
    {
        Gate::authorize('create', Curso::class);

        $curso = new Curso();

        $curso->nome = strtoupper($request->nome);
        $curso->duracao = $request->duracao;

        $curso->save();

        return view('cursos.show', $curso->id);
    }

    public function show(string $id)
    {
        $curso = Curso::find($id);

        Gate::authorize('view', $curso);

        if(isset($curso)) {
            return view('cursos.show', compact('curso'));
        }

        return redirect()->route('cursos.index');
    }

    public function edit(string $id)
    {
        $curso = Curso::find($id);

        Gate::authorize('update', $curso);

        if(isset($curso)) {
            return view('cursos.edit', compact('curso'));
        }

        return redirect()->route('cursos.index');
    }

    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);

        Gate::authorize('update', $curso);

        if(isset($curso)) {
            $curso->nome = strtoupper($request->nome);
            $curso->duracao = $request->duracao;

            $curso->save();

            return redirect()->route('cursos.show', $curso->id);
        }

        return redirect()->route('cursos.index');
    }

    public function destroy(string $id)
    {
        $curso = Curso::find($id);

        Gate::authorize('delete', $curso);

        if(isset($curso)) {
            $curso->delete();
        }

        return redirect()->route('cursos.index');
    }
}
