@extends('layouts.app')

@section('title', 'Detalhes da Disciplina')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Detalhes da Disciplina</h1>
    <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Voltar</a>
</div>


<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>Nome</th>
                    <td>{{ $disciplina->nome }}</td>
                </tr>
                <tr>
                    <th>Aulas</th>
                    <td>{{ $disciplina->aulas }}</td>
                </tr>
                <tr>
                    <th>Curso</th>
                    <td>
                        {{ $disciplina->curso->nome }}
                        @can('view', $disciplina->curso)
                        <a 
                            href="{{ route('cursos.show', $disciplina->curso->id) }}" 
                            class="btn btn-secondary btn-sm float-end">
                            Acessar Curso
                        </a>
                        @endcan
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3 d-flex gap-2">
            @can('update', $disciplina)
            <a href="{{ route('disciplinas.edit', $disciplina->id) }}" class="btn btn-primary">Editar</a>
            @endcan

            @can('delete', $disciplina)
            <form action="{{ route('disciplinas.destroy', $disciplina->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja acabar com {{ $disciplina->nome }}?')">
                    Desintegrar
                </button>
            </form>
            @endcan
        </div>

    </div>
</div>

@endsection
