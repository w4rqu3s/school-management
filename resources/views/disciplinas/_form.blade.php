{{-- Nome --}}
<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input 
        type="text" 
        id="nome" 
        name="nome" 
        value="{{ old('nome', $disciplina->nome ?? '') }}"
        class="form-control"
        required
    >
</div>

{{-- Curso --}}
<div class="mb-3">
    <label for="curso" class="form-label">Curso</label>
    <select id="curso" name="curso" class="form-select" required>
        <option value="">Selecione...</option>
        @foreach ($cursos as $curso)
            <option 
                value="{{ $curso->id }}" 
                {{ old('curso', $disciplina->curso_id ?? '') == $curso->id ? 'selected' : '' }}
                {{-- data-duracao="{{ $curso->duracao }}" --}}
            >
                {{ $curso->nome }} ({{ $curso->duracao }} anos)
            </option>
        @endforeach
    </select>
</div>

{{-- Aulas --}}
<div class="mb-3">
    <label for="aulas" class="form-label">Quantidade de Aulas Semanais</label>
    <input 
        type="number"
        id="aulas"
        name="aulas"
        min="1"
        value="{{ old('aulas', $disciplina->ano ?? null) }}"
        class="form-control"
        required
    >
</div>
