<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Aluno;
use \App\Models\Curso;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $aluno = new Aluno();

        $aluno->nome = $request->nome;
        $aluno->ano = $request->ano;
        $aluno->curso()->associate(Curso::find(1));

        $aluno->save();

        return redirect()->route('alunos.show', compact('aluno'));
    }

    public function show(string $id)
    {
        $aluno = Aluno::find($id);

        if(isset($aluno)) {
            return view('alunos.show', compact('aluno'));
        }

        return redirect()->route('alunos.index');
    }

    public function edit(string $id)
    {
        $aluno = Aluno::find($id);

        if(isset($aluno)) {
            return view('alunos.edit', compact('aluno'));
        }

        return redirect()->route('alunos.index');
    }

    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);

        if(isset($aluno)) {
            $aluno->nome = $request->nome;
            $aluno->ano = $request->ano;
            $aluno->curso()->associate(Curso::find(1));

            return redirect()->route('alunos.show', compact('aluno'));
        }

        return redirect()->route('alunos.index');
    }

    public function delete(string $id)    // to confirm destroy
    {
        $aluno = Aluno::find($id);

        return view('alunos.delete', compact('aluno'));
    }

    public function destroy(string $id)
    {
        $aluno = Aluno::find($id);

        if(isset($aluno)) {
            $aluno->delete();
        }

        return redirect()->route('alunos.index');
    }
}
