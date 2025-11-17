<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('alunos.update', $aluno->id) }}" method="post">

        @csrf
        @method('PUT')

        <label for="nome">NOME:</label>
        <input type="text" id="nome" name="nome" value = "{{ $aluno->nome }}"><br><br>

        <label for="ano">ANO:</label>
        <input type="ano" id="ano" name="ano" value = "{{ $aluno->ano }}"><br><br>

        <button type="submit">Enviar</button>

    </form>

    <a href="{{ url()->previous() }}">VOLTAR</a>
</body>
</html>