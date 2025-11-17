<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $curso = new Curso();

        $curso->nome = $request->nome;
        $curso->duracao = $request->duracao;

        $curso->save();

        return view('cursos.show', compact('curso'));
    }

    public function show(string $id)
    {
        $curso = Curso::find($id);

        if(isset($curso)) {
            return view('cursos.show', compact('curso'));
        }

        return redirect()->route('cursos.index');
    }

    public function edit(string $id)
    {
        $curso = Curso::find($id);

        if(isset($curso)) {
            return view('cursos.edit', compact('curso'));
        }

        return redirect()->route('cursos.index');
    }

    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);

        if(isset($curso)) {
            $curso->nome = $request->nome;
            $curso->duracao = $request->duracao;

            $curso->save();
        }

        return redirect()->route('cursos.index');
    }

    public function destroy(string $id)
    {
        $curso = Curso::find($id);

        if(isset($curso)) {
            $curso->delete();
        }

        return redirect()->route('cursos.index');
    }
}
