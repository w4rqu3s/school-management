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
            <tbody>
                <tr>
                    <td>NOME:</td>
                    <td>{{ $aluno->nome }}</td>    
                </tr>
                <tr>
                    <td>ANO:</td>
                    <td>{{ $aluno->ano }}</td>    
                </tr>
                <tr>
                    <td>CURSO:</td>
                    <td>{{ $aluno->curso->nome }}</td>    
                </tr>
                <tr>
                    <td><a href="{{ route('alunos.edit', $aluno->id) }}">EDITAR</a></td>
                    <td><a href="{{ route('alunos.delete', $aluno->id) }}">DESTRUIR</a></td>    
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{ url()->previous() }}">VOLTAR</a>
</body>
</html>