@extends('layouts.app')

@section('title', 'Detalhes do Curso')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Detalhes do Curso</h1>
    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Voltar</a>
</div>


<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>Nome</th>
                    <td>{{ $curso->nome }}</td>
                </tr>
                <tr>
                    <th>Duração</th>
                    <td>{{ $curso->duracao }}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3 d-flex gap-2">
            @can('update', $curso)
            <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-primary">Editar</a>
            @endcan

            @can('viewDiscents', App\Models\Curso::class)
            <a href="{{ route('cursos.alunos', $curso->id) }}" class="btn btn-secondary">Listar Discentes</a>
            @endcan

            @can('viewClasses', App\Models\Curso::class)
            <a href="{{ route('cursos.disciplinas', $curso->id) }}" class="btn btn-secondary">Listar Disciplinas</a>
            @endcan

            @can('delete', $curso)
            <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja eliminar este curso?')">
                    Matar
                </button>
            </form>
            @endcan
        </div>

    </div>
</div>

@endsection
