@extends('layouts.app')

@section('title', 'Cadastrar Disciplina')

@section('content')
    <h1 class="h3 mb-4">Cadastrar Disciplina</h1>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('disciplinas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @include('disciplinas._form')

                <button class="btn btn-success">Salvar</button>

                <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary ms-2">
                    Voltar
                </a>

            </form>

        </div>
    </div>
@endsection
