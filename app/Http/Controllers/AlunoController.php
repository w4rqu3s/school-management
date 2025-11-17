<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Str;

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
        $cursos = Curso::all();
        return view('alunos.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $aluno = new Aluno();

        $aluno->nome = $request->nome;
        $aluno->ano = $request->ano;

        $aluno->curso()->associate(Curso::find($request->curso));

        if($request->hasFile('foto')) {
            $ext = $request->file('foto')->getClientOriginalExtension();
            $name =  Str::uuid() . '.' . $ext;   // gera um nome único para o arquivo
            $request->file('foto')->storeAs('fotos', $name, ['disk' => 'public']);
            $aluno->foto = 'fotos/'.$name;
        }

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
        $cursos = Curso::all();

        if(isset($aluno)) {
            return view('alunos.edit', compact(['aluno', 'cursos']));
        }

        return redirect()->route('alunos.index');
    }

    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);

        if(isset($aluno)) {

            $aluno->nome = $request->nome;
            $aluno->ano = $request->ano;
            $aluno->curso()->associate(Curso::find($request->curso));

            if($request->hasFile('foto')) {
                $ext = $request->file('foto')->getClientOriginalExtension();
                $name =  Str::uuid() . '.' . $ext;
                $request->file('foto')->storeAs('fotos', $name, ['disk' => 'public']);
                $aluno->foto = 'fotos/'.$name;
            }

            return redirect()->route('alunos.show', compact('aluno'));
        }

        return redirect()->route('alunos.index');
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

