@extends('layouts.app')

@section('title', 'Lista de Cursos')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Cursos</h1>

        @can('viewAny', App\Models\Curso::class)
        <a href="{{ route('cursos.create') }}" class="btn btn-primary">
            Novo Curso
        </a>
        @endcan
    </div>

    <div class="card">
        <div class="card-body p-0">

            <table class="table table-striped table-hover align-middle m-0">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Duracao</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->nome }}</td>
                            <td>{{ $curso->duracao }}</td>

                            @can('view', $curso)
                            <td class="text-center">
                                <a 
                                    href="{{ route('cursos.show', $curso->id) }}" 
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
                                Nenhum curso cadastrado ainda.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

@endsection
