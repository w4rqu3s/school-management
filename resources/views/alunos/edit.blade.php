@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h1 class="h3 mb-4">Editar Aluno</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('alunos.update', $aluno->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('alunos._form')

                <button class="btn btn-primary">Atualizar</button>

                <a href="{{ route('alunos.index') }}" class="btn btn-secondary ms-2">
                    Voltar
                </a>

            </form>

        </div>
    </div>
@endsection
