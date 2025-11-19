@extends('layouts.app')

@section('title', 'Lista de Disciplinas')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Disciplinas</h1>

        @can('create', App\Models\Disciplina::class)
        <a href="{{ route('disciplinas.create') }}" class="btn btn-primary">
            Nova Disciplina
        </a>
        @endcan
    </div>

    <div class="card">
        <div class="card-body p-0">

            <table class="table table-striped table-hover align-middle m-0">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Curso</th>
                        <th>Aulas</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($disciplinas as $disciplina)
                        <tr>
                            <td>{{ $disciplina->nome }}</td>
                            <td>{{ $disciplina->curso->nome }}</td>
                            <td>{{ $disciplina->aulas }}</td>

                            @can('view', $disciplina)
                            <td class="text-center">
                                <a 
                                    href="{{ route('disciplinas.show', $disciplina->id) }}" 
                                    class="btn btn-sm btn-secondary"
                                >
                                    Acessar
                                </a>
                            </td>
                            @endcan
                        </tr>

                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">
                                Nenhuma disciplina cadastrada ainda.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

@endsection
