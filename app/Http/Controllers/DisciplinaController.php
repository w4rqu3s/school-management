<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use \App\Models\Disciplina;
use \App\Models\Curso;

class DisciplinaController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Disciplina::class);

        $disciplinas = Disciplina::all();

        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        Gate::authorize('create', Disciplina::class);

        $cursos = Curso::all();

        return view('disciplinas.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        Gate::authorize('create', Disciplina::class);

        $disciplina = new Disciplina();

        $disciplina->nome = strtoupper($request->nome);
        $disciplina->aulas = $request->aulas;
        $disciplina->curso()->associate(Curso::find($request->curso));

        $disciplina->save();

        return redirect()->route('disciplinas.show', $disciplina->id);
    }

    public function show(string $id)
    {
        $disciplina = Disciplina::find($id);

        Gate::authorize('create', $disciplina);

        if(isset($disciplina)) { 
            return view('disciplinas.show', compact('disciplina'));
        }

        return redirect()->route('disciplinas.index');
    }

    public function edit(string $id)
    {
        $disciplina = Disciplina::find($id);

        Gate::authorize('update', $disciplina);

        if(isset($disciplina)) {
            $cursos = Curso::all();

            return view('disciplinas.edit', compact(['disciplina', 'cursos']));
        }

        return redirect()->route('disciplinas.index');
    }

    public function update(Request $request, string $id)
    {
        $disciplina = Disciplina::find($id);

        Gate::authorize('update', $disciplina);

        if(isset($disciplina)) {
            $disciplina->nome = strtoupper($request->nome);
            $disciplina->aulas = $request->aulas;
            $disciplina->curso()->associate(Curso::find($request->curso));

            $disciplina->save();

            return redirect()->route('disciplinas.show', $disciplina->id);
        }

        return redirect()->route('disciplinas.index');
    }

    public function destroy(string $id)
    {
        $disciplina = Disciplina::find($id);

        Gate::authorize('delete', $disciplina);

        if(isset($disciplina)) {
            $disciplina->delete();
        }

        return redirect()->route('disciplinas.index');
    }
}
