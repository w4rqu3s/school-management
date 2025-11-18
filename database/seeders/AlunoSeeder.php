<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        // Certifique-se que a pasta 'fotos' existe
        Storage::disk('public')->makeDirectory('fotos');

        // Caminhos dos arquivos de teste
        $fotos_testes = [
        ];

        // Dados iniciais sem foto
        $data = [
        ];

        foreach ($data as &$aluno) {
            $foto_origem = array_shift($fotos_testes); // pega fotos na ordem

            $ext = pathinfo($foto_origem, PATHINFO_EXTENSION);
            $nome_arquivo = Str::uuid() . '.' . $ext;

            Storage::disk('public')->putFileAs('fotos', $foto_origem, $nome_arquivo);

            $aluno['foto'] = 'fotos/'.$nome_arquivo;
        }

        DB::table('alunos')->insert($data);
    }
}
