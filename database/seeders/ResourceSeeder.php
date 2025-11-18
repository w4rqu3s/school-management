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
            ["name" => "curso.index"], // 1
            ["name" => "curso.create"], // 2
            ["name" => "curso.show"], // 3
            ["name" => "curso.edit"], // 4
            ["name" => "curso.delete"], // 5
            ["name" => "curso.alunos"], // 6
            ["name" => "curso.disciplinas"], // 7
            // ALUNO
            ["name" => "aluno.index"], // 8
            ["name" => "aluno.create"], // 9
            ["name" => "aluno.show"], // 10
            ["name" => "aluno.edit"], // 11
            ["name" => "aluno.delete"], // 12
            ["name" => "aluno.report"], // 13
            // DISCIPLINA
            ["name" => "disciplina.index"], // 14
            ["name" => "disciplina.create"], // 15
            ["name" => "disciplina.show"], // 16
            ["name" => "disciplina.edit"], // 17
            ["name" => "disciplina.delete"], // 18
        ];
        DB::table('resources')->insert($data);
    }
}
