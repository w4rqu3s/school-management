{{-- Nome --}}
<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input 
        type="text" 
        id="nome" 
        name="nome" 
        value="{{ old('nome', $curso->nome ?? '') }}"
        class="form-control"
        required
    >
</div>


{{-- Duração --}}
<div class="mb-3">
    <label for="ano" class="form-label">Duração do Curso</label>
    <input 
        type="number"
        id="duracao"
        name="duracao"
        min="1"
        value="{{ old('ano', $curso->duracao ?? null) }}"
        class="form-control"
        required
    >
</div>
