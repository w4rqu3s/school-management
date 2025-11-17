@extends('layouts.app')

@section('title', 'Editar Curso')

@section('content')
    <h1 class="h3 mb-4">Editar Curso</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('cursos.update', $curso->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('cursos._form')

                <button class="btn btn-primary">Atualizar</button>

                <a href="{{ route('cursos.index') }}" class="btn btn-secondary ms-2">
                    Voltar
                </a>

            </form>

        </div>
    </div>
@endsection
