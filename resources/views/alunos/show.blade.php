@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Detalhes do Aluno</h1>
    <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
</div>


<div class="card">
    <div class="card-body">

        <div class="row g-0">
            <div class="col-md-4 text-center p-3">
                <img 
                    src="{{ $aluno->foto ? asset('storage/' . $aluno->foto) : asset('images/default-avatar.webp') }}" 
                    alt="{{ $aluno->nome }}" 
                    class="img-fluid rounded" 
                    style="max-height: 200px;"
                >
            </div>
        <div class="col-md-8">

        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>Nome</th>
                    <td>{{ $aluno->nome }}</td>
                </tr>
                <tr>
                    <th>Período / Grau</th>
                    <td>{{ $aluno->ano }}</td>
                </tr>
                <tr>
                    <th>Curso</th>
                    <td>
                        {{ $aluno->curso->nome }}
                        <a 
                            href="{{ route('cursos.show', $aluno->curso->id) }}" 
                            class="btn btn-secondary btn-sm float-end">
                            Acessar Curso
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3 d-flex gap-2">

            <a href="{{ route('aluno.report', $aluno->id) }}" class="btn btn-danger">
                <i class="bi bi-file-earmark-pdf-fill"></i>
            </a>

            <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-primary">Editar</a>


            <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja destruir {{ $aluno->nome }}?')">
                    Destruir
                </button>
            </form>

        </div>

    </div>
</div>

@endsection
