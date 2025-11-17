<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ["nome" => "TÉCNICO EM INFORMÁTICA", "duracao" => 4],
            ["nome" => "TÉCNICO EM MEIO AMBIENTE", "duracao" => 4],
            ["nome" => "TÉCNICO EM MECÂNICA", "duracao" => 4],
            ["nome" => "TÉCNICO EM PRODUÇÃO CULTURAL", "duracao" => 4],
            ["nome" => "TÉCNÓLOGO EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS", "duracao" => 3],
            ["nome" => "TÉCNÓLOGO EM GESTÃO AMBIENTAL", "duracao" => 3],
            ["nome" => "TÉCNÓLOGO EM MANUTENÇÃO INDUSTRIAL", "duracao" => 3],
        ];
        DB::table('cursos')->insert($data);
    }
}
