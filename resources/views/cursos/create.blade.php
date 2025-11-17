@extends('layouts.app')

@section('title', 'Cadastrar Curso')

@section('content')
    <h1 class="h3 mb-4">Cadastrar Curso</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @include('cursos._form')

                <button class="btn btn-success">Salvar</button>

                <a href="{{ route('cursos.index') }}" class="btn btn-secondary ms-2">
                    Voltar
                </a>

            </form>

        </div>
    </div>
@endsection
