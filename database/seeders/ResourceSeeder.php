<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // CURSO
            ["name" => "cursos.index"], // 1
            ["name" => "cursos.create"], // 2
            ["name" => "cursos.show"], // 3
            ["name" => "cursos.edit"], // 4
            ["name" => "cursos.delete"], // 5
            ["name" => "cursos.alunos"], // 6
            ["name" => "cursos.disciplinas"], // 7
            // ALUNO
            ["name" => "alunos.index"], // 8
            ["name" => "alunos.create"], // 9
            ["name" => "alunos.show"], // 10
            ["name" => "alunos.edit"], // 11
            ["name" => "alunos.delete"], // 12
            ["name" => "aluno.report"], // 13
            // DISCIPLINA
            ["name" => "disciplinas.index"], // 14
            ["name" => "disciplinas.create"], // 15
            ["name" => "disciplinas.show"], // 16
            ["name" => "disciplinas.edit"], // 17
            ["name" => "disciplinas.delete"], // 18
        ];
        DB::table('resources')->insert($data);
    }
}
