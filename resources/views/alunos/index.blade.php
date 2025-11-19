@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Alunos</h1>

        @can('create', App\Models\Aluno::class)
        <a href="{{ route('alunos.create') }}" class="btn btn-primary">
            Novo Aluno
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
                        <th>Ano</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->curso->nome }}</td>
                            <td>{{ $aluno->ano }}</td>

                            @can('view', $aluno)
                            <td class="text-center">
                                <a 
                                    href="{{ route('alunos.show', $aluno->id) }}" 
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
                                Nenhum aluno cadastrado ainda.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

@endsection
