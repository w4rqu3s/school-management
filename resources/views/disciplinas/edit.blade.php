@extends('layouts.app')

@section('title', 'Editar Disciplina')

@section('content')
    <h1 class="h3 mb-4">Editar Disciplina</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('disciplinas._form')

                <button class="btn btn-primary">Atualizar</button>

                <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary ms-2">
                    Voltar
                </a>

            </form>

        </div>
    </div>
@endsection
