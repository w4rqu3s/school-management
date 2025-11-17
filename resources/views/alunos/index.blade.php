<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <th>NOME</th>
                <th>CURSO</th>
                <th>ANO</th>
                <th>AÇÕES</th>
            </thead>
            <tbody>
                @foreach ($alunos as $item)
                    <tr>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->curso->nome }}</td>
                        <td>{{ $item->ano }}</td>
                        <td>
                            <a href="{{ route('alunos.edit', $item->id) }}">EDITAR</a>
                        </td>
                        <td>
                            <a href="{{ route('alunos.delete', $item->id) }}">DESTRUIR</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <a href="{{ route('alunos.create') }}">NOVO ALUNO</a>
    </div>
</body>
</html>

