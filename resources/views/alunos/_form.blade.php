{{-- Nome --}}
<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input 
        type="text" 
        id="nome" 
        name="nome" 
        value="{{ old('nome', $aluno->nome ?? '') }}"
        class="form-control"
        required
    >
</div>

{{-- Foto --}}
<div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input 
        type="file" 
        id="foto" 
        name="foto"
        value="{{ old('foto', $aluno->foto ?? '') }}"
        class="form-control"
        accept="image/*"
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
                {{ old('curso', $aluno->curso_id ?? '') == $curso->id ? 'selected' : '' }}
                {{-- data-duracao="{{ $curso->duracao }}" --}}
            >
                {{ $curso->nome }} ({{ $curso->duracao }} anos)
            </option>
        @endforeach
    </select>
</div>

{{-- Grau / Período --}}
<div class="mb-3">
    <label for="ano" class="form-label">Período / Ano do Curso</label>
    <input 
        type="number"
        id="ano"
        name="ano"
        min="1"
        value="{{ old('ano', $aluno->ano ?? null) }}"
        class="form-control"
        required
    >
</div>
