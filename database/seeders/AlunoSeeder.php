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
            database_path('seeders/fotos_testes/husky.webp'),
            database_path('seeders/fotos_testes/lucaspug.jpg'),
            database_path('seeders/fotos_testes/lassie.jpg'),
            database_path('seeders/fotos_testes/catnap.webp'),
            database_path('seeders/fotos_testes/asafepug7.webp'),
            database_path('seeders/fotos_testes/lulu.webp'),
            database_path('seeders/fotos_testes/chihuahua.avif'),
            database_path('seeders/fotos_testes/beagle.webp'),
        ];

        // Dados iniciais sem foto
        $data = [
            ["nome" => "VICTOR PECINE MARQUES", "ano" => 3, "curso_id" => 1],
            ["nome" => "LUCAS PECINE MARQUES", "ano" => 1, "curso_id" => 2],
            ["nome" => "GRACIELLE GASPAR PECINE", "ano" => 1, "curso_id" => 6],
            ["nome" => "CATNAP", "ano" => 3, "curso_id" => 1],
            ["nome" => "ASAFE ELIAS MARQUES", "ano" => 3, "curso_id" => 1],
            ["nome" => "HANAE ROSA TERATO RAMOS", "ano" => 3, "curso_id" => 1],
            ["nome" => "DANIEL GARBETTO CARDOSO", "ano" => 3, "curso_id" => 1],
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
