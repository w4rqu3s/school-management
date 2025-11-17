<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>TEM CERTEZA QUE DESEJA DESTRUIR {{ $aluno->nome }} ?</h1>
    <h2>ID: {{ $aluno->id }}</h2>
    <h2>Curso: {{ $aluno->curso->nome }}</h2>
    <h2>Ano: {{ $aluno->ano }}</h2>
    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">SIM (ELIMINAR PARA SEMPRE)</button>
</form>
    <a href="{{ url()->previous() }}">NÃO (ABORTAR OPERAÇÃO)</a>
</body>
</html>