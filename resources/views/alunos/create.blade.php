@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1 class="h3 mb-4">Cadastrar Aluno</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('alunos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @include('alunos._form')

                <button class="btn btn-success">Salvar</button>

                <a href="{{ route('alunos.index') }}" class="btn btn-secondary ms-2">
                    Voltar
                </a>

            </form>

        </div>
    </div>
@endsection
