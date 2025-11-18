<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatório do Aluno</title>

    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        td, th { border: 1px solid #000; padding: 8px; }
        h1 { text-align: center; }
    </style>
</head>
<body>

    <h1>Relatório do Aluno</h1>

    <table>
        <tr>
            <th>Nome</th>
            <td>{{ $aluno->nome }}</td>
        </tr>

        <tr>
            <th>Curso</th>
            <td>{{ $aluno->curso->nome }}</td>
        </tr>

        <tr>
            <th>Ano (grau)</th>
            <td>{{ $aluno->ano }}</td>
        </tr>

        <tr>
            <th>Foto</th>
            <td>
                @if($aluno->foto)
                    <img src="{{ public_path('storage/' . $aluno->foto) }}" width="120">
                @else
                    Sem foto
                @endif
            </td>
        </tr>
    </table>

</body>
</html>
