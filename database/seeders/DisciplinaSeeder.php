<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            // informática
            ["nome" => "Des. Web", "aulas" => 4, "curso_id" => 1],
            ["nome" => "Intro a Redes", "aulas" => 2, "curso_id" => 1],
            ["nome" => "Física III 💔", "aulas" => 4, "curso_id" => 1],

            // meio ambiente
            ["nome" => "Manejo", "aulas" => 2, "curso_id" => 2],
            ["nome" => "Biologia", "aulas" => 2, "curso_id" => 2],

            // mecânica
            ["nome" => "Res. dos Materiais", "aulas" => 2, "curso_id" => 3],
            ["nome" => "Usinas", "aulas" => 1, "curso_id" => 3]
        ];

        DB::table('disciplinas')->insert($data);
    }
}
